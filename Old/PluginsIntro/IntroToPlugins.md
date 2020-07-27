# Intro to Omeka Plugins

_Provide an overview of how plugins in Omeka work, conventions of the Zend Framework that are important, Model-View-Controller pattern, how Zend does MVC_

_Pedagogically, some might prefer to start with high-level concepts first, some might prefer to start with quick hacks first and build up to the concepts._

## Simple Plugin: add text to item pages
_Explain how the hook and filter system works in plugins._

Install HookFilterExample

### Activities

* Change the text of output based on information in the item
* Use the hook onto the collections show page


## Plugin Directory Structure

_Explain how views directory structure aligns with public, admin, and common._
_Explain how subdirectory names align with Controller names_
_Explain how php files in subdirectories align with actionMethod names_

ControllerViewExample plugin is designed for this

### Activities

* Using ControllerViewExample plugin, build something into indexAction to display in the view.
	* set a variable in the action and echo it in the view
	* set a variable as an array and loop
* Create a new method and the view to go with it


## Models
_Explain how to use a model, including the modelTable pattern, to dig up and display stored data_

ModelExample plugin is designed for this

* Models often consist of a class for the model, which extends Omeka_Record, and a model table, which extends Omeka_Db_Table

### Activities

* Switch from using the simple search method to using the findBy() method
* Using the Omeka applyFilters pattern, add another filter for public and change the query in the hook to use that instead of the straightforward one

## Omeka's Model-View-Controller structure
_Explain how the models, views, and controllers work together_


## The Omeka_Controller_Action and Zend_Controller_Action Classes

_Explain typical use cases for using methods on the superclasses_

application/libraries/Omeka/Controller/Action.php
application/libraries/Zend/Controller/Action.php

### Pre-made actions

* showAction : show an individual record
* indexAction : forwards to browse
* browseAction : show many records with pagination
* editAction : edit a record
* deleteAction : delete a record


## Navigating Omeka's Codebase
_Explain likely places to look if you need to know more about how Omeka's functions, classes, and methods work_

Underscores in class names usually mean a directory path. So Omeka_Db_Table is found in application/libraries/Omeka/Db/Table.php. 

* application/helpers folder
	* if a function with underscores, look around in files here
* application/models folder
	* look here for more about core types: Item, Collection, User, plus *Table classes
* application/libraries/Omeka folder
	* look here for database and record classes
* application/libraries/Zend folder
	* we build off of Zend, so look here when Omeka classes extend off of Zend_* classes

## Changes coming in Omeka 2.0 (Fall 2012)

* See [Updating Plugins For Omeka 2.0](http://omeka.org/codex/Updating_Plugins_For_2.0)

