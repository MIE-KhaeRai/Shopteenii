<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  --contentWidth: 400px;
  padding: 1rem;
  scrollbar-width: 20px;
}
body::-webkit-scrollbar {
  width: 20px;
}
body::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
}

body::-webkit-scrollbar-thumb {
  background-color: darkgrey;
  outline: 1px solid slategrey;
}
.full-width {
  background: lightcoral;
  width: calc(100vw - 20px);
  margin-left: 50%;
  transform: translateX(-50%);
  padding: 1rem 0;
}
main, .full-width-inside {
  max-width: var(--contentWidth);
  margin: 0 auto;
}
.full-width-inside {
  padding-left: 1rem;
  padding-right: 1rem;
}
</style>
</head>
<body>
<main>

    <p>This approach uses negative margins and padding to extend the background in both directions. This works great if you're using a single background color for the bar.</p>

    <section class="full-width">
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos unde autem exercitationem doloremque! Aliquid, ut dolorem voluptas quos earum vitae ipsa rem voluptate eum ab quisquam at, corrupti officia totam!</p>
    </section>

    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi modi consectetur officia dolorum, consequatur autem ipsum odit corrupti vero, suscipit, error laboriosam vel recusandae architecto dignissimos id reprehenderit aperiam itaque!</p>

  </main>

</body>
</html>
