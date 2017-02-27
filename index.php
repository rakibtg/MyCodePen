<!DOCTYPE html>
<html lang="en">
<head>
<title>ACE in Action</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="editorwrapper">
  <div class="editorlabel">
    <div class="single_editor_label">
      <div class="label_name">
        HTML
      </div>
    </div>
    <div class="single_editor_label">
      <div class="label_name">
        JS
      </div>
    </div>
    <div class="single_editor_label">
      <div class="label_name">
        CSS
      </div>
    </div>
  </div>
  <div class="editor" id="htmleditor"></div>
  <div class="editor" id="jseditor"></div>
  <div class="editor" id="csseditor"></div>
</div>
    
<script src="https://cdn.jsdelivr.net/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/ace/1.2.6/noconflict/ace.js" type="text/javascript" charset="utf-8"></script>
<script src="https://cloud9ide.github.io/emmet-core/emmet.js"></script>
<script src="https://cdn.jsdelivr.net/ace/1.2.6/noconflict/ext-emmet.js"></script>
<script>
  // html editor
  var htmleditor = ace.edit("htmleditor")
  htmleditor.setTheme("ace/theme/monokai")
  htmleditor.getSession().setMode("ace/mode/html")
  htmleditor.getSession().setTabSize(2)
  document.getElementById('htmleditor').style.fontSize='16px'
  htmleditor.setOption("enableEmmet", true)
  htmleditor.container.style.lineHeight = 1.5
  htmleditor.renderer.updateFontSize()

  // js editor
  var jseditor = ace.edit("jseditor")
  jseditor.setTheme("ace/theme/monokai")
  jseditor.getSession().setMode("ace/mode/javascript")
  jseditor.getSession().setTabSize(2)
  document.getElementById('jseditor').style.fontSize='16px'
  jseditor.container.style.lineHeight = 1.5
  jseditor.renderer.updateFontSize()

  // css editor
  var csseditor = ace.edit("csseditor")
  csseditor.setTheme("ace/theme/monokai")
  csseditor.getSession().setMode("ace/mode/css")
  csseditor.getSession().setTabSize(2)
  document.getElementById('csseditor').style.fontSize='16px'
  csseditor.container.style.lineHeight = 1.5
  csseditor.renderer.updateFontSize()
</script>
</body>
</html>