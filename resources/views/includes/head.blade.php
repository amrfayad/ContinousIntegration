<meta charset="utf-8">
<meta name="description" content="">
<meta name="author" content="Scotch">
<title>@yield('title')</title>
<!-- load bootstrap from a cdn -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<style>
      div.container {
            width: 1000px;
            margin:0 auto;
      }
      ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
      }
      li {
            float: left;
      }
      li a {
            display: block;
            color: white;
            text-align: left;
            padding: 14px 16px;
            text-decoration: none;
      }
      li a:hover {
            background-color: #111;
      }
      header, footer {
            padding: 1em;
            color: white;
            background-color: #8e1414;
            clear: left;
            text-align: center;
            width:1000px;
      }
      .sidebar{
            float: left;
            max-width: 240px;
            margin: 0;
            padding: 1em;
            background-color: #357b33;
            height:inherit;
      }
      .contents{
            margin-left: 170px;
            border-left: 1px solid gray;
            padding: 1em;
            overflow: hidden;
            height: inherit;
      }
      .response{
            font-size: 20px;
            color: #ff00e7;
      }
</style>