# Laravel Helpers

A personal collection of Laravel helpers.

## Install

Via Composer

``` bash
$ composer require stekel/laravel-helpers
```

## Debug

| Function      | Description   |
| ------------- | ------------- |
| `ddquery(Illuminate\Database\Eloquent\Builder $query)`     | Debug an eloquent query by outputting sql + bindings |
| `ddf(...)` | Runs the Laravel dd() function but also outputs filename and line number |
| `dda(Illuminate\Support\Collection $collection, string $attribute)` | Runs the Laravel dd() function while returning only a specific attribute from the collection of models |
| `enableQueryLog()` | Enable the Laravel database query log |
| `dumpQueryLog()` | Dump the entire Laravel database query log |
| `dumpSimpleQueryLog()` | Dump only the query line from the Laravel database query log |

## Formatting

| Function      | Description   |
| ------------- | ------------- |
| `humanFilesize(integer $bytes, integer $decimals)` | Converts bytes into a human readable format |

## General

| Function      | Description   |
| ------------- | ------------- |
| `isNotNull($value)` | Checks if the value is not null |
| `isNull($value)` | Checks if the value is null (Camel-case version of is_null()) |
| `shortName($object)` | Returns class name in lowercase |
| `isJson(string $string)` | Checks if the value is json |
| `prettyPrintJson(string $json)` | Pretty print json |
| `host()` | Get the current hostname |
| `makeArray($value)` | Force $value to be an array |

## Random

| Function      | Description   |
| ------------- | ------------- |
| `randomUppercaseLetter()` | Generates a random uppercase letter |
| `randomLowercaseLetter()` | Generates a random lowercase letter |
| `generateRandomPassword()` | Generates a random password |

