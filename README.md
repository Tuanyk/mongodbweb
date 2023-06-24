First, rename database_sample.php to database.php, and replace your mongodb login string to match your setup.

# Database structure

Before we dive in to the database's structure, I want to talk a little bit about this project. This is a simple lightweight PHP project, to show the data I processed (and stored in MongoDB), to a Website Interface.

I translate the content I want, from langA to the destination langB, so the fields in the document seem a little bit wierd, not title and content, it's title_langA_langB and final_html_langA_langB. But that's not important, whatever name it is, it still works :D

MongoDB -> DatabaseName -> CollectionName -> Documents

DatabaseName and CollectionName can be anything, it's your taste, I will not talk much about it.
The important thing here is what is inside document, which fields are required!

document
    *_id* (of course, it's auto generated, you dont need to care about that)
    *categories*: Array (an array of category this post belong to)
    *title_{langA}_{langB}: this is a field contain the title translated from langA to langB, for example *title_en_vi*
    *final_html_{langA}_{langB}*: same as above, this contain the html of the post, but is customized for specific need. Think about it as the post_content field of wordpress. It's just a name, nothing special!