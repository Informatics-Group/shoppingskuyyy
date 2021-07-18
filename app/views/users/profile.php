<div class="container mt-5" style="justify-content: space-between; display:flex;">
  <div class="main">
    <h2>Main content</h2>
    <p>Scroll down the page!</p>
    <h3>How to recreate this</h3>
    <p>
      Position the columns with flex. Then apply two lines of CSS to the sidebar to make it sticky:
    <pre>
.sidebar {
  position: sticky;
  top: 0;
}
    </pre>
    Include <code>position: -webkit-sticky;</code> for Safari.
    </p>
  </div>

  <div class="sidebar">
    <h3>Sticky sidebar</h3>
    <p>I will follow you!</p>
    <p><a href="https://caniuse.com/#search=sticky">caniuse stats</a>
  </div>
</div>