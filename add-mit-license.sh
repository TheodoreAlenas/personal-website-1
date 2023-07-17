#!/bin/env sh

main() {
  if [ "$1" = '--custom' ]
  then shift; add_missing_licenses_to "$@"
  elif [ "$1" = '--try-stdio-with-comments' ]
  then shift; if_no_license_add_stdio "$@"
  elif [ "$1" = '--print-files' ]
  then find_files_print0 | tr '\0' '\n'
  elif [ $# = 0 ]
  then add_missing_licenses
  else usage; return 1
  fi
}

add_missing_licenses() {
  find_files_print0 | xargs -0 sh "$0" --custom
}

find_files_print0() {
  find . \
    -name '.git' -prune -o \
    -name target -prune -o \
    -name images -prune -o \
    -type f -print0
}

usage() {
  echo "To specify files, the first argument must be --custom" >&2
  echo "You may also, --try-stdio-with-comments '/*' '*/' ''" >&2
  echo "or --print-files without arguments to see the default files." >&2
}

add_missing_licenses_to() {
  for file
  do choose_comment_type_and_if_no_license_add "$file"
  done
}

choose_comment_type_and_if_no_license_add() {
  case "$1" in
    (*.php | *.css | *.js) if_no_license_add "$1" '/*' '*/' '' ;;
    (*.sh | Makefile | .gitignore) if_no_license_add "$1" '' '' '# ' ;;
    (*.md) if_no_license_add "$1" '<!--' '-->' '' ;;
    (*) echo "$0: Unknown file type: $1" >& 2 ;;
  esac
}

if_no_license_add() {
  buffer_with_license="$(mktemp /tmp/adding-license-XXXXXX)"
  if if_no_license_add_stdio "$2" "$3" "$4" < "$1" > "$buffer_with_license"
  then mv -v "$buffer_with_license" "$1"
  fi
  rm "$buffer_with_license"
}

if_no_license_add_stdio() {
  proper_first_line="$3$1 License at the bottom. $2"
  read -r first_line
  if [ "$first_line" = "$proper_first_line" ]
  then return 1
  else add_license "$proper_first_line" "$@"
  fi
}

add_license() {
  printf "%s\n" "$1"
  cat
  printf "%s\n" "$2"
  print_license | while read -r l; do printf "%s\n" "${4}${l}"; done
  printf "%s\n" "$3"
}

print_license() {
cat <<EOF
Copyright (c) 2023 Dimakopoulos Theodoros

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
EOF
}

main "$@"
exit $?
