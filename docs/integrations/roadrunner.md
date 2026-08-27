# RoadRunner

At worker boot, construct immutable catalog and factory services and reuse them for every request. Build tenant-specific catalogs outside the shared service and select them explicitly; never use static registries.
