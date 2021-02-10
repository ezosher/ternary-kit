# Ternary kit

Ternary kit is a Conditions Pack for Oxygen Builder in Different Categories see list (Updating). the plugin is open source and the goal is to make it a **community plugin** with various ideas from everyone using oxygen. you are most welcome to contribute and add a spark ⚡ to this repo   

## Condition List

- Mobile Detection 
- More to come...

## Installation

To install the plugin just `Download` the repo from the far right and choose the `zip` option. then upload to your wordpress website

![](https://i.imgur.com/rraBFV7.png)

### 1. Condition: Mobile Detect

This condition is based on the popular lightweight library [PHP Mobile Detect](http://mobiledetect.net/). the condition lets you check if a `User-Agent` is on Mobile, Desktop or Specific Device like Android and iOS. When Return value is `true` element will show

## Example
![](https://i.imgur.com/O4i2BrP.png)

in this scenario I have a Title with a condition that checks if the device a user is on is an `Android`. if the condition is `true` the element will show to the user only on Android.

#### Available operators 

currently the condition accepts only the the `==` equal operator. in the future I will add more options

#### Available Options

```php

Desktop # Checks if Desktop | Returns true/false 
Mobile # Checks if Mobile | Returns true/false
Tablet # Checks if Tablet | Returns true/false
Android # Checks if Android | Returns true/false
iOS # Checks if iOS | Returns true/false
```

**using `iOS` option sometimes conflict with other iOS Devices and can return `true` for tablet or other iOS devices**

## 2. More Condition Ideas to come




## Contributing
if you have any ideas for conditions please let me know.
if you want to contribute Pull requests are welcome. please fork repo and send pull requests
For major changes, please open an issue.

## License
[MIT](https://choosealicense.com/licenses/mit/)
