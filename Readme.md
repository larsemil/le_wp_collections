## Collections in wordpress!

As big fans of Laravel we sometimes miss their Collections when using WordPress.

This plugin adds Collection support to be used in WordPress. **YAY**! It is a plugin aimed at developers and you can either use it as a normal WordPress plugin, OR you can just include it in your theme directly.

To use it as a normal PHP class you can simply do:
```
$collection = new \Illuminate\Support\Collection();
//followed by for example:
$collection->prepend("Testing a colletions");
```
Full documentation of the Collection class can be found over at the [Laravel documentation](https://laravel.com/docs/5.1/eloquent-collections).

**BUT!** This plugin also adds the functionality to have wordpress core functions return collections instead of arrays. Yes. You heard me. _Core functions returning collections_.

Put this in your functions.php:
```
add_filter('le_collections_filters', function(){
	return ['get_terms'];
});
```
Now when you run the get_terms() function you will automaticly get a collection instead of a normal array! This does not work with all filters as some core functions needs regular arrays and then you have to build the collection yourself instead. But for _most_ filters it works just perfect. **YAY!**

### Happy Hacking!!