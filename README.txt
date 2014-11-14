ImDateTime is an experiment in how a non-mutable PHP DateTime might look.

Instead of being mutable like DateTime, this follows the Value Object pattern,
which is more typical for date and time objects.

The intention is to preserve the DateTime API as closely as possible, whilst
replacing the various modification functions.

Note that since ImDateTime was created this has become core functionality in PHP, as provided by the DateTimeImmutable class.

TODO:

 - getLastErrors()
 - ensure all tests run in different timezones
