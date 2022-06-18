=== Sub Post Navigation Widget ===
Contributors: Dennis Hoppe
Tags: widget, sidebar, page, pages, cms, menu,        widget,Post,plugin,admin,posts,sidebar,comments,google,images,page,image,links
Requires at least: 3.2
Tested up to: 3.5.2
Stable tag: trunk

Sub Post Navigation displays the child-, parent- and sibling elements of hierarchically ordered post types like pages, posts and galleries.

== Description ==
[Sub Post Navigation](http://dennishoppe.de/en/wordpress-plugins/sub-post-navigation) is a state of the art [WordPress Plugin](http://dennishoppe.de/en/wordpress-plugins/sub-post-navigation) Widget which displays the child-, parent- and sibling elements of hierarchically ordered post types like pages, posts and galleries. For non-hierachically post types the widget can display the media attachments. The Widget generates a easy customizable HTML5 navigation you can style with your own CSS3.

In the [Lite Edition of the plugin](http://dennishoppe.de/en/wordpress-plugins/sub-post-navigation) you can take a look around and you try out everything. On several places in the plugin you will find a notice that this function is included in the [Pro Version](http://dennishoppe.de/en/wordpress-plugins/sub-post-navigation) only. There is no support available for the [free Lite Version](http://dennishoppe.de/en/wordpress-plugins/sub-post-navigation).

= How the Widget works =
* The [Sub Post Navigation Widget](http://dennishoppe.de/en/wordpress-plugins/sub-post-navigation) displays all child elements of the current page (or custom post type).
* If there are no child elements the [Widget](http://dennishoppe.de/en/wordpress-plugins/sub-post-navigation) displays the sibling elements of the current page (or custom post type).
* If the post type is not hierachically the [Widget](http://dennishoppe.de/en/wordpress-plugins/sub-post-navigation) displays the media attachments of the current post.
* For Pages (or custom post types) without parent elements and without child elements you can hide the [Widget](http://dennishoppe.de/en/wordpress-plugins/sub-post-navigation).
* For non-hierarchical post types the Widget displays the attachments of the current post.
* For deeper nesting of hierarchies the Widget could display a link to the parent page (or custom post type).
* The Widget title could be replaced by the title of the parent page (or custom post type).

= Customizing the appearance =
The output of the Widget is completely customizable. In the plugin folder you can find the file "sub-post-navigation.php" which renders the output. *Please do not modify it - you would lose all your modification then updating the plugin!* Copy the file inside your themes folder (regardless of parent or child theme) and start modify it. Inside the template code your can access these vars:

<code>
$WIDGET: Pointer to the Widget object.
$TITLE: Contains the widget title.
$PARENT: Contains the ID to the parent post/page
$NAVIGATION: Contains a WP_Query object with all elements which should be shown in this view.
</code>

= Questions =
I know you have many questions – my mailbox is the proof. ;) But unfortunately I cannot give support for the free plugins. There is a separate support package available for the [Pro Version](http://dennishoppe.de/en/wordpress-plugins/sub-post-navigation) of this plugin. Please use it. Of course you can hire me for consulting, support, programming and customizations at any time.

= Language =
* This plug-in is available in English.
* Dieses Plugin ist in Deutsch verfügbar. ([Dennis Hoppe](http://DennisHoppe.de/))

= Translate this plugin =
If you have translated this plugin in your language feel free to send me the language file (.po file) via E-Mail with your name and this translated sentence: "This plugin is available in %YOUR_LANGUAGE_NAME%." So i can add it to the plugin.

You can find the *Translation.pot* file in the *language/* folder in the plugin directory.

* Copy it.
* Rename it (to your language code).
* Translate everything.
* Send it via E-Mail to &lt;Mail [@t] [DennisHoppe](http://DennisHoppe.de) [dot] de&gt;.
* Thats it. Thank you! =)


== Frequently Asked Questions ==
I am still collecting frequently asked questions.


== Screenshots ==
1. Backend of the Widget
2. Frontend example of a parent page with five child ements


== Installation ==
1. Purchase the Widget or get the free lite version of the plugin.
1. Save the plugin as .zip file on your hard disk drive.
1. Go to your WordPress Backend and login.
1. Go to Plugins -> Add New -> Upload and upload the .zip file you saved. Then click "Install now".
1. After you uploaded the plugin successfully WordPress offers you the "Activate" link - click it! ;)
1. Now you can find your new Widget in Appearance -> Widgets.


== Changelog ==

= 1.1.2 =
* Moved "widget_title" filter
* Added some arrows as example elements

= 1.1.1 =
* Added "widget_title" filter.

= 1.1 =
* Added support for non hierarchical post types

= 1.0.2 =
* Works now with post types without UI, too
* Added Windows Server Support

= 1.0.1 =
* Changed the frontend behavior

= 1.0 =
* Everything works fine.