ERROR: You must supply at least one file or directory to process.

Usage: phpcbf [-nwli] [-d key[=value]] [--stdin-path=<stdinPath>]
    [--standard=<standard>] [--sniffs=<sniffs>] [--exclude=<sniffs>] [--suffix=<suffix>]
    [--severity=<severity>] [--error-severity=<severity>] [--warning-severity=<severity>]
    [--tab-width=<tabWidth>] [--encoding=<encoding>]
    [--extensions=<extensions>] [--ignore=<patterns>] [--bootstrap=<bootstrap>]
    [--file-list=<fileList>] <file> ...
        -n            Do not fix warnings (shortcut for --warning-severity=0)
        -w            Fix both warnings and errors (on by default)
        -l            Local directory only, no recursion
        -i            Show a list of installed coding standards
        -d            Set the [key] php.ini value to [value] or [true] if value is omitted
        --help        Print this help message
        --version     Print version information
        --no-patch    Do not make use of the "diff" or "patch" programs
        <file>        One or more files and/or directories to fix
        <fileList>    A file containing a list of files and/or directories to fix (one per line)
        <stdinPath>   If processing STDIN, the file path that STDIN will be processed as 
        <bootstrap>   A comma separated list of files to run before processing starts
        <encoding>    The encoding of the files being fixed (default is iso-8859-1)
        <extensions>  A comma separated list of file extensions to fix
                      (extension filtering only valid when checking a directory)
                      The type of the file can be specified using: ext/type
                      e.g., module/php,es/js
        <patterns>    A comma separated list of patterns to ignore files and directories
        <sniffs>      A comma separated list of sniff codes to include or exclude during fixing
                      (all sniffs must be part of the specified standard)
        <severity>    The minimum severity required to fix an error or warning
        <standard>    The name or path of the coding standard to use
        <suffix>      Write modified files to a filename using this suffix
                      ("diff" and "patch" are not used in this mode)
        <tabWidth>    The number of spaces each tab represents
