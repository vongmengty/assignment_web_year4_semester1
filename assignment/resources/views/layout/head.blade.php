<meta charset="utf-8">
<meta name="keywords" content="HTML, CSS, XML, XHTML, JavaScript">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Super Cool Layouts</title>
<!-- <link rel="stylesheet" href="{{ URL::asset('css/font-awesome.min.css') }}"> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style media="screen">
      html,body{
          background-color: #F9FAFA;
          margin: 0;
          width: 100%;
          display: flex;
          flex-direction: row;
          flex-flow: row wrap;
      }
      header{
        width: 100%;
        background-color: #EDEFF0;
        display: flex;
        flex: 1 auto;
        order: 1;
      }
      .submenu{
        background-color: #ffffff;
        border-right: 6px solid #EDEFF0;
        display: flex;
        flex: 1;
        order: 2;
      }

      .vertical-menu {
            width: 100%;
        }

        .vertical-menu a {
            background-color: #eee;
            color: black;
            display:  flex;
            padding: 12px;
            text-decoration: none;
        }

        .vertical-menu a:hover {
            background-color: #ccc;
        }

        .vertical-menu a.active {
            background-color: #4CAF50;
            color: white;
        }

      .container{
          width: 90%;
          padding-bottom: 20px;
          display: flex;
          flex-direction:column;
          flex: 8;
          order: 3;
      }
      .slide{
          width: 100%;
          display: flex;
          order: 1;
          background-color: rgb(143, 133, 130);
      }
      .main{
        width: 100%;
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: flex-start;
        order: 2;
        background-color: #F9FAFA;
      }
      .item{
          width: 220px;
          height: 250px;
          background-color: #EDEFF0;
          display: block;
          margin-right: 20px;
          margin-top: 20px;
      }
      .footer{
        width: 100%;
        background-color: #EDEFF0;
        height: 70px;
        display: flex;
        flex: 1 auto;
        order: 4;
      }
      .copyright{
        margin: auto;
        display: flex;
      }
</style>
