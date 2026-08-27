# Swoole and OpenSwoole

Construct catalogs before serving coroutines. Catalogs have no mutation methods, so requests can interleave reads safely. Keep tenant catalogs scoped to application-controlled services rather than mutable globals.
