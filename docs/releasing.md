# Releasing v2

Run `composer validate --strict`, `composer check`, and `composer benchmark`. Verify a clean install contains no PSR Cache, PSR-11, Laminas, Mezzio, or worker-runtime dependency. The cache decision is reproducible: immutable in-process arrays are the default and no cache decorator is shipped.
