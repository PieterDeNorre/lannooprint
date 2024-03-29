# Require any additional compass plugins here.

#Folder settings
relative_assets = true      #because we're not working from the root
css_dir = "../_css"          #where the CSS will saved
sass_dir = "sass"           #where our .scss files are
images_dir = "../_img"    #the folder with your images

# You can select your preferred output style here (can be overridden via the command line):
output_style = :compressed  #After dev :compressed or : expanded

# To disable debugging comments that display the original location of your selectors. Uncomment:
line_comments = true

# Obviously
preferred_syntax = :sass
require 'susy'
require 'breakpoint'