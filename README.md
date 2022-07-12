# Env Condition

> Env Condition is a Statamic Modifier that only displays it's content in a selected environment.

## Features

This addon does:

- Allows you to select an environment variable that the fields content shows up in.

## How to Install

You can use this addon by running the following command from your project root:

``` bash
composer require surgems/env-condition
```

## How to Use

You can display a field whenever the <code>APP_ENV</code> is a certain environment.
This modifier uses 3 environments:

- local
- staging
- production

There are 2 modifiers:

```antlers
{{ field | if_env:local }}
```

This would display the field content if the <code>APP_ENV</code> IS equal to 'local'.

```antlers
{{ field | if_env_not:local }}
```

This would display the field content if the <code>APP_ENV</code> IS NOT equal to 'local'.

You can also add multiple parameters:

```antlers
{{ field | if_env:local:staging }}
```

This would display the field content if the <code>APP_ENV</code> IS equal to 'local' OR 'staging'.

If the condition is not met, it returns false meaning you can also null check the values:

```antlers
{{ if field | if_env:local }}
    <p>{{ field }}</p>
{{ /if }}
```
