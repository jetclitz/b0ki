Database name  = "library"

"root" pass = "static"

Table names= "lib", "mags"

"lib" fields: (books)

-id(auto-increment)
-name(name of borrower)
-author
-status(borrowed/available)
-date(timestamp, on update)


"mag" fields: (magazine)

-id(auto-increment)
-magname(magazine name)
-name(name of borrower)
-author(publisher)
-status(borrowed/available)
-date(timestamp, on update)