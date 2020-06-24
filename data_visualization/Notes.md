# Data Visualization with D£


* D3 is a JavaSCript library that can be used to create visualizations in the browser.

* Takes input data and maps it into a visual representation of that data
* Lets you attach the data to the DOM
* HTML or SVG elements can be used with d3's built-in methods to map that data into a 
visualizations


# D3 methods

select() - selects and element from the document

append() - appends an HTML node to a selected item and returns a handle to that node


text() - sets the text of the selected node or gets the current text
e.g

```HTML
<script>

d3.select("ul")
  .append("li")
  .text("D3 is cool")

  </script>
```

selectAll() - selects a group of elements and returns an array of HTML nodes
for all the items in the document that match the input string

e.g.
```html
const anchors = d3.selectAll("a");
```

selects all the anchor tags in a document

```html<body>
  <ul>
    <li>Example</li>
    <li>Example</li>
    <li>Example</li>
  </ul>
  <script>
   

d3.selectAll("li")
  .text("Hi")
  </script>
</body>
```

outputs:
* hi
* hi
* hi
