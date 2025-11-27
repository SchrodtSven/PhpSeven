# PhpSeven
Collection of tests for new Features in PHP 7.* An overview of new features for each (sub) version is listed [here](doq/VersionHistory.md) as <var>ToDO-List</var>.

> [!NOTE]
> Jump directly to [PHP Examples](src/PhpSeven/)


## PHP 7.2 

### Covariance and Contravariance ¶

In [PHP 7.2.0](https://www.php.net/manual/en/migration72.new-features.php), partial contravariance was introduced by removing type restrictions on parameters in a child method. As of PHP 7.4.0, full covariance and contravariance support was added.

- <i>Covariance</i> allows a child's method to return a __more specific__ <var>type</var> than the return type of its parent's method. 
- <i>Contravariance</i> allows a parameter <var>type</var> to be __less specific__ in a child method, than that of its parent.

A type declaration is considered more specific in the following case:

- A type is removed from a [union type](https://www.php.net/manual/en/language.types.type-system.php#language.types.type-system.composite.union)
- A type is added to an [intersection type](https://www.php.net/manual/en/language.types.type-system.php#language.types.type-system.composite.intersection)
- A class type is changed to a child class type
- [iterable](https://www.php.net/manual/en/language.types.iterable.php) is changed to array or Traversable


#### What Makes a Type less/more Specific?

A type declaration is considered __more specific__ (*covariant*) in the following cases:

- A type is removed from a union type (e.g., if ```int|float``` is changed to ```int```)
- A type is added to an intersection type (e.g., if ```int is changed``` to ```int&float```)
- A class type is changed to a child class type (e.g., if ```Report``` is changed to ```DashReport```)


A type declaration is considered __less specific__ (*contravariant*) in the following cases:

- A type is added to a union type (e.g., if i```int``` is changed to ```int|float```)
- A type is removed from an intersection type (e.g., if ```int&float``` is changed to ```int```)
- A class type is changed to a parent class type (e.g., if ```DashReport``` is changed to ```Report```)
