This is the example code on how to use the Lib to connect Aust to your for PHP sites.

### Where to look at

The only file you need to look is index.php. Forget the rest for now.

### How to reproduce this example

1) Download Aust. In this example, we deployed the CMS in the admin/ folder (which is the default).

2) Access Aust and install it. If you never installed Aust, just open
http://localhost/path\_to\_aust in your browsers. See the documentation for further details about
_Installing Aust_.

3) Inside the Admin Panel, create a new Structure called *News* using the *Textual* module. 
See the documentation for further details about _Installing Modules_.

4) Insert some content to the new generated Structure.

5) Now go to index.php (outside Aust) and you should see your content there.

### How the code works

First, we include the lib in the top of the page:

    include('aust_lib.php');

By default, the lib acts as if Aust is located in the admin/ directory. If it's not, use
the following command to specify a different folder:

    austPath('admin/');

To load anything, just run

    austQuery('the_query_string_for_the_api')

In the example, we needed all the news, so we used:

    austQuery('query=news')

You can use lots of other options:

    austQuery('query=news&limit=10&fields=title;text')

Read the documentation for more information about the power of the API.