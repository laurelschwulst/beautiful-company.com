<?php if(!defined('KIRBY')) exit ?>

title: Content
pages: false
files:
  sortable: true
  fields:
    caption:
      label: Caption
      type: textarea
    image_size:
      label: Size
      type: radio
      options:
        small: Small
        medium: Medium
        large: Large
      columns: 3
fields:
  title:
    label: Title
    type:  text
  title:
    label: Title
    type:  text
    width: 4/5
  dormant:
    label: Dormant?
    type: checkbox
    width: 1/5
  slideshow:
    label: Slideshow?
    type:  checkbox
    width: 1/4
  zoom:
    label: Zoom?
    type:  checkbox
    width: 1/4
  background:
    label: Background color
    type: text
    width: 1/4
  text_color:
    label: Text color
    type: text
    width: 1/4
  description:
    label: Description
    type:  textarea
  credits:
    label: Credits
    type: textarea
    help: As (Beautiful Company). With (Collaborator). For (Rhizome). Roles included (this, this, and this).
  year:
    label: Year
    type:  text
    width: 1/2
  link:
    label: URL?
    type:  text
    width: 1/2
  type:
    label: Type
    type:  radio
    options:
      identity: Identity
      name: Name
      object: Object
      website: Website
      writing: Writing
    columns: 5
  collaborator:
    label: Collaborator(s)
    type:  checkboxes
    options: query
    help: To add a new collaborator, create a page for them under the "Collaborators" page
    query:
      page: collaborators
      fetch: children
    columns: 3
  related:
    label: Related
    type: textarea