<meta charset="utf-8">
<meta name="keywords" content="HTML, CSS, XML, XHTML, JavaScript">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Super Cool Layouts</title>
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/twitter-bootstrap/3.0.3/css/bootstrap-combined.min.css">
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
        background-color: #EDEFF0;
        display: flex;
        flex: 1;
        order: 2;
        margin-right: 20px;
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
          flex: 1 auto;
          order: 1;
          background-color: rgb(143, 133, 130);
      }
      .main{
        width: 100%;
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: center;
        flex: 1 auto;
        order: 2;
        background-color: #F9FAFA;
      }
      .box{
          width: 220px;
          height: 250px;
          background-color: #EDEFF0;
          display: flex;
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
        text-align: center;
        padding-top: 25px;
        display: flex;
      }
</style>
