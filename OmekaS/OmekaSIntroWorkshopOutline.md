Intro to Omeka S
----------------

**What is Omeka S?**

If you're familiar with Omeka Classic, you'll find that S has the same
strong cultural heritage content management with rich metadata.

But S also has:

-   Stronger relational options, possibility to use existing resources
    > as properties for new items

-   Additional vocabularies as primary descriptors and the ability to
    > add more

-   More flexible site building

Designed for institutions that support multiple Omeka instances, but
also useful for teaching situations, people who want to expose their
collections as Linked Open Data, and/or people with strong relational
data needs.

NB User roles reflect this, with settings for the full installation,
site privileges, and content privileges

**What isn't it?**

Omeka S does not replace Omeka Classic. They're both still being
developed as they address different needs.

Examples of Omeka S in action:

-   J. Willard Marriott Library:
    > [[https://exhibits.lib.utah.edu/s/home/page/home]{.ul}](https://exhibits.lib.utah.edu/s/home/page/home)

    -   Created a index site for the many sites they are building using
        > Omeka S

    -   Exactly one of our intended use cases - university library

        -   Each site exists on its own

        -   Some have the same theme

        -   Others (fighting words) do not

-   [[https://glam.uoregon.edu/fabricofcollecting/page/welcome]{.ul}](https://glam.uoregon.edu/fabricofcollecting/page/welcome)

    -   Organization

    -   Robust use of browse blocks

-   [[http://dpanther03new.fiu.edu/omeka-s/s/african-american-aids-history-project/page/home-page]{.ul}](http://dpanther03new.fiu.edu/omeka-s/s/african-american-aids-history-project/page/home-page)

    -   Based on organization, probably started life as an Omeka Classic
        > installation

    -   Each "exhibit" is its own site, with a link back to the main
        > site as the final item in the menu

Let's take a look at the back end:

1.  Organization:

    a.  Left hand Nav:

        i.  Divided into sections based on what you're working with.

        ii. Admin & Modules options may or may not be visible depending
            > on user role

    b.  Omeka S has two main components to focus on when getting
        > started: Resources and Sites.

    c.  Sites are the public-facing side of the Omeka S installation,
        > and each of them stands alone - they won't share a menu
        > (without work) and each has its own theme settings and so
        > forth.

    d.  You build sites using Resources, which for S is a term that
        > encompasses Items and item sets and media, as well as
        > vocabularies and resource templates.

2.  Starting with resources, since you'll want to have some before you
    > start building out sites

    a.  Let's start with Items:

        i.  Note column for "Owner" - quick and easy way to see who
            > created which items, going back to that "large scale,
            > multi project installation" model.

        ii. Ellipses give you a quick overview

        iii. Click on title to view details

        iv. Linked resources! (have to *already exist*)

        v.  Edit the item:

            1.  Select a property from *any* of the available
                > vocabularies

            2.  Input options: text, Omeka Resource (item, item set, or
                > previously uploaded media), and URI

            3.  Media options (walk through)

            4.  Item Sets: click to add

            5.  Mapping (this is a module) - multiple locations!

    b.  Item sets

        i.  Ways of grouping items

        ii. Items can be in many item sets

        iii. Item sets can relate to items, and to each other

        iv. Can be open (anyone can add to) or closed (just you)

        v.  Can be visible or not (to non-users)

        vi. Item sets can be added to sites - good way of grouping items
            > you're going to want to add to a site.

    c.  Vocabularies:

        i.  Omeka S comes with 3 vocabs (Dublin Core, Bibo, FoaF)

        ii. Can add more - requires some work to import, but possible

        iii. Examples of vocabs you might add include schema, VRA core.

    d.  Resource Templates

        i.  Templates for kinds of items (item types) but also for
            > patterns (can use for item sets and as well as items)

        ii. Build from any of the vocabs (mix and match)

        iii. NB can change labels to describe what's specific to that
             > template

        iv. Can allow all kinds of data - what we saw before in items
            > and item sets with text input, using a resource or a URI -
            > OR you can lock it down to only one data type.

        v.  Modules allow you to further refine templates by:

            1.  adding dropdowns

            2.  suggested vocabulary

            3.  Setting data types (numeric data)

3.  In action!

    a.  Let's create an item

    b.  Using a resource template

    c.  And add it to an item set!

Building sites

1.  Now that you have an item, time to build a site!

2.  Sites are made up of pages.

    a.  Unlike previous versions of Omeka, you control every aspect of
        > these sites: which pages are public, how the pages are
        > structured.

    b.  Much more free-form than Classic - which means more decisions.

    c.  Page block options:

        i.  Run through

        ii. Build a page

    d.  Navigation:

        i.  Where you set the order of the pages.

        ii. Note that here you have some additional options: straight up
            > browse pages for items and item sets, as well as a link,
            > and (if Mapping installed) a basic map browse)

        iii. Drag and drop to order

             1.  Nesting possible

3.  Page view

4.  Page settings

    a.  Themes

    b.  Settings

    c.  Modules

Modules

1.  Mapping

    a.  More than one location per item!

2.  Custom Vocab and Value Suggest

    a.  Make your resource templates even more robust

3.  Metadata Browse

    a.  Per site but can also be configured to be global on the backend

4.  Numeric data

    a.  Lets you use ISO-8 formatting for dates which are then
        > searchable
