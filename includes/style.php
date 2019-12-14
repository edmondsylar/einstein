<style media="screen">
  .company-up-info {
    /* display: block; */
    max-height: 400px;
    height: 250px;
    overflow: hidden;

  }

  .desc {
    height: 100%;

  }

  .ads {
    /* display: none; */
    width: 400px;
    min-height: 500px;
    padding-top:5px;
    margin; 10px;
    z-index: -1;
  }

  .galla-view {
    width: 400px;
    height: auto;
    display: block;
  }

  .galla-view:hover{
    /* display: none; */
  }

  .success-msg{
    padding: 5px;
    margin: 5px;
    background-color: #4BB543;
    color: white;
    font-weight: lighter;
    text-align: center;
    border-radius: 3px;
  }

  .error-msg{
    padding: 5px;
    margin: 5px;
    background-color: red;
    color: white;
    font-weight: lighter;
    text-align: center;
    border-radius: 3px;
  }

  [data-tooltip] {
    position: relative;
    z-index: 2;
    cursor: pointer;
  }

  /* Hide the tooltip content by default */
  [data-tooltip]:before,
  [data-tooltip]:after {
    visibility: hidden;
    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
    filter: progid: DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
    pointer-events: none;
  }

  /* Position tooltip above the element */
  [data-tooltip]:before {
    position: absolute;
    z-index: 1;
    bottom: 150%;
    left: auto;
    margin-bottom: 5px;
    margin-left: -200px;
    padding: 7px;
    width: 400px;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
    background-color: #000;
    background-color: hsla(0, 0%, 20%, 0.9);
    color: #fff;
    content: attr(data-tooltip);
    text-align: center;
    font-size: 14px;
    line-height: 1.2;
  }

  /* Triangle hack to make tooltip look like a speech bubble */
  [data-tooltip]:after {
    z-index: 1;
    position: absolute;
    bottom: 150%;
    left: 50%;
    margin-left: -5px;
    width: 0;
    border-top: 5px solid #000;
    border-top: 5px solid hsla(0, 0%, 20%, 0.9);
    border-right: 5px solid transparent;
    border-left: 5px solid transparent;
    content: " ";
    font-size: 0;
    line-height: 0;
  }

  /* Show tooltip content on hover */
  [data-tooltip]:hover:before,
  [data-tooltip]:hover:after {
    visibility: visible;
    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
    filter: progid: DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
    z-index: -1;
  }
</style>
