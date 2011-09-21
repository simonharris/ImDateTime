ImDateTime is an experiment in how a non-mutable PHP DateTime might look.

Instead of being mutable, this follows the Value Object pattern, which is more
typical for date and time objects.

TODO:

 - getOffset()
 - createFromFormat()
 - getLastErrors()
 - ensure all tests run is different timezones
