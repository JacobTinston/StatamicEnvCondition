# Env Condition

> Env Condition is a Statamic Modifier that only displays it's content in a selected environment.

## Features

This addon does:

- Allows you to display content/fields based on the <code>APP_ENV</code>.

## How to Install

You can use this addon by running the following command from your project root:

``` bash
composer require surgems/env-condition
```

## How to Use

This addons uses 3 environments:

- local
- staging
- production

### Tag

You can display content inside the tag depending on the condition of the <code>APP_ENV</code>.

There are 2 tag Methods:

```antlers
{{ if_env env="local" }}
    {{ content | widont }}
{{ /if_env }}
```

This would display the content inside the tags if the <code>APP_ENV</code> IS 'local'.

```antlers
{{ if_env:not env="local" }}
    {{ content | widont }}
{{ /if_env:not }}
```

This would display the content inside the tags if the <code>APP_ENV</code> IS NOT 'local'.

You can also add multiple parameters:

```antlers
{{ if_env:not env="local|staging" }}
    {{ content | widont }}
{{ /if_env:not }}
```

This would display the content inside the tags if the <code>APP_ENV</code> IS NOT 'local' OR 'staging'.


### Modifier

You can display a field whenever the <code>APP_ENV</code> is a certain environment.

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
