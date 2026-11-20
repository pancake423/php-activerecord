# Deprecations

Keeping track of known deprecations that don't have an easy fix.

[lib/DateTime.php](lib/DateTime.php), line 127

DateTime::createFromFormat() overloads the corresponding method on the base DateTime class to return a
custom DateTime instance. Apparently PHP doesn't like this for static methods, though it's fine with it
for instance methods.

[lib/Relationship.php](lib/Relationship.php), property $primary_key.

The BelongsTo and HasMany relationships rely on a dynamically created $primary_key property. 
For reasons unbeknownst to me, creating that property (even setting it to null/undefined) 
completely breaks the relationships. I wasn't able to figure out a fix.
