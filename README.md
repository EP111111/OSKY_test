# OSKY_test

# 

## Preview
![Preview](https://github.com/EP111111/OSKY_test/blob/main/Preview/Backend.png)


## Prerequisites

- PHP installed on your server
- Web server (e.g., Apache or Nginx) to run the PHP code
- Internet connection for jQuery CDN

## Usage

1. Clone the Repository and Navigate to the Project Directory
2. Place the data.json file in the project root.
3. Set up a web server to host the PHP files or run the php file.
```
php backend.php
```
4. Open the application in a web browser or run .



## Features

1. **Dynamic News Display**: The web page dynamically fetches news data from the `data.json` file and displays it with a fade-in effect.

2. **Alphabetical Sorting**: The news articles are sorted alphabetically based on their titles.

3. **Date Formatting**: The publication dates of the news articles are formatted using the PHP `DateTime` class for a more user-friendly display.

4. **URL Validation and Filtering**: The PHP script validates and filters URLs associated with news articles, ensuring that only valid URLs are displayed.

5. **"Read More" Link**: The script adds a "Read More" link to the news descriptions, linking to the provided URLs.

6. **Fade-In Effect with jQuery**: The web page uses jQuery to apply a fade-in effect to each news items, creating a visually appealing display.



## PHP

```
$file = file_get_contents('data.json');
$json = json_decode($file, true);
$sorted_json = titleSort($json);

foreach ($sorted_json as $item) {
  // Displaying news articles
}

// Sorting function
function titleSort($arr) {
  // Sorting logic
}

function formatDate($date) {
}

function getLink($link) {
}

function addReadMore($links, $des) {
}

```
- Title Sorting: The news items are sorted alphabetically by title. It uses the array_column function to extract an array of titles, sorts that array, and then builds a new array with the news items in the sorted order.

- Date Formatting:  is responsible for formatting the publication date.
- The formatDate function takes a date string in the format used by the news data and converts it into a more readable format. It uses the DateTime::createFromFormat method to create a DateTime object and then formats it according to the required format.

- Link Handling: The getLink function filters valid URLs from the provided links. It checks if each link is a valid URL using filter_var and collects them in an array. The function can handle both single URLs and arrays of URLs.

- Read More Links: The addReadMore function adds a "Read More" link to the news description if a valid URL is found within the provided links. It iterates through the links and appends a hyperlink to the description if a match is found.

- The jQuery with a fade-in effect utilizes the $(document).ready function to ensure the DOM is fully loaded before applying the fade-in effect. The .each function is then used to iterate through each element with the class .news, applying a delay and fade-in effect to create a visually appealing display.

```
<script>
    $(document).ready(function () {
        $('.news').each(function (index) {
            $(this).delay(1000 * index).fadeIn(1000);
        });
    });
</script>
```



# Frontend_testing 

## Preview

![Preview](https://github.com/EP111111/OSKY_test/blob/main/Preview/frontend.png)

## Description

The HTML file (`Frontend.html`) includes the basic structure of a webpage with the following components:

- **Header**: A top section containing a logo and social media icons.
- **Navigation Bar**: A menu bar with links to different sections of the website.
- **Submenu**: A dropdown submenu under the "Membership" menu item.
- **JavaScript**: Includes a script for handling submenu visibility and confirming navigation to external domains.

## Usage

To use this frontend template, follow these steps:

1. Clone the repository or down the html file
2. Open the Frontend.htm file in a web browser.

## Features

- Responsive header with a logo and social icons.
- Navigation menu with dropdown submenu.
- Click confirmation before navigating to external links.

## License

This project is licensed under the [Apache License, Version 2.0](http://www.apache.org/licenses/LICENSE-2.0), which means you can use, modify, and distribute the code under the terms of this license. See the [LICENSE](LICENSE) file for more details.
