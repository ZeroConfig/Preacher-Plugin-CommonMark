# Introduction

This is a [Preacher](https://github.com/ZeroConfig/Preacher) plugin. It replaces
the [Parsedown](http://parsedown.org) implementation with
[CommonMark](http://commonmark.thephpleague.com/).

# Installation

```bash
composer require zero-config/preacher-plugin-commonmark:^1.0
```

# Preacher developers

The CommonMark converter has been registered on the public service
`preacher.common_mark.converter`.
By supplying this with arguments in your own bundle, its behavior and
functionality can be augmented.
