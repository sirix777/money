# FrankenPHP worker mode

Build `DefaultCurrencyCatalog` and `MoneyFactory` before the worker loop, then inject the same immutable instances into each request handler. Do not register currencies or mutate configuration per request.
