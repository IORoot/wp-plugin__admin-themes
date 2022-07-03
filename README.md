
<div id="top"></div>

<div align="center">


<img src="https://svg-rewriter.sachinraja.workers.dev/?url=https%3A%2F%2Fcdn.jsdelivr.net%2Fnpm%2F%40mdi%2Fsvg%406.7.96%2Fsvg%2Fcompare.svg&fill=%23075985&width=200px&height=200px" style="width:200px;"/>

<h3 align="center">Admin Theme Switcher</h3>

<p align="center">
    This plugin allows you to define multiple sites and it will switch the Admin CSS colour theme based on the website you're currently using.
</p>    
</div>

##  1. <a name='TableofContents'></a>Table of Contents


* 1. [Table of Contents](#TableofContents)
* 2. [About The Project](#AboutTheProject)
	* 2.1. [Built With](#BuiltWith)
	* 2.2. [Installation](#Installation)
* 3. [Usage](#Usage)
* 4. [Customising](#Customising)
* 5. [Contributing](#Contributing)
* 6. [License](#License)
* 7. [Contact](#Contact)



##  2. <a name='AboutTheProject'></a>About The Project

Good for distinguishing which particular site you are administrating. Define a site you own and the CSS file you wish to use. The admin panels will be switched to that theme.

<p align="right">(<a href="#top">back to top</a>)</p>



###  2.1. <a name='BuiltWith'></a>Built With

This project was built with the following frameworks, technologies and software.

* [CSS](https://www.w3.org/Style/CSS/Overview.en.html)
* [PHP](https://php.net/)
* [Wordpress](https://wordpress.org/)

<p align="right">(<a href="#top">back to top</a>)</p>



###  2.2. <a name='Installation'></a>Installation

These are the steps to get up and running with this plugin.

1. Clone the repo into your wordpress plugin folder
    ```sh
    git clone https://github.com/IORoot/wp-plugin__admin-themes ./wp-content/plugins/admin-themes
    ```
1. Activate the plugin.


<p align="right">(<a href="#top">back to top</a>)</p>



##  3. <a name='Usage'></a>Usage

Once the plugin is activated the theme will activate.

##  4. <a name='Customising'></a>Customising

You can create your own colour scheme by editing the `admin_themes.php` file.

1. Step one is to edit the `andyp_additional_admin_color_schemes()` function. Register your own colour theme like the three already added.
```php
    wp_admin_css_color( 
        'your_custom_key', 
        __( 'name_of_your_theme' ),
        plugins_url( '/', __FILE__ ) . '/css/name_of_your_theme.css' ,
        [ '#242424', '#53A5E3', '#E86546' ]
    );
```
You can read more information on the wordpress docs: [https://developer.wordpress.org/reference/functions/wp_admin_css_color/](https://developer.wordpress.org/reference/functions/wp_admin_css_color/)

2. Step two is to edit the `switch_admin_scheme($result)` function. 

```php
    if((strpos($site, 'mydomain.com') !== false)) {
        return 'your_custom_key';
    }
```
This will look up the `your_custom_key` you added in the previous step and load it. So define your website and which theme you want it to load.

3. Provide your own CSS file to load in '/css/name_of_your_theme.css'. Use one of the others as a base.



<p align="right">(<a href="#top">back to top</a>)</p>


##  5. <a name='Contributing'></a>Contributing

Contributions are what make the open source community such an amazing place to learn, inspire, and create. Any contributions you make are **greatly appreciated**.

If you have a suggestion that would make this better, please fork the repo and create a pull request. You can also simply open an issue.
Don't forget to give the project a star! Thanks again!

1. Fork the Project
2. Create your Feature Branch (`git checkout -b feature/AmazingFeature`)
3. Commit your Changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the Branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

<p align="right">(<a href="#top">back to top</a>)</p>



##  6. <a name='License'></a>License

Distributed under the MIT License.

MIT License

Copyright (c) 2022 Andy Pearson

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.

<p align="right">(<a href="#top">back to top</a>)</p>



##  7. <a name='Contact'></a>Contact

Author Link: [https://github.com/IORoot](https://github.com/IORoot)

<p align="right">(<a href="#top">back to top</a>)</p>
