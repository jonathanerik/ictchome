<!DOCTYPE html>
<html>
<head>
<style>
p.normal {
    border-style: rounded;
}

round1 {
    border: 2px solid red;
    border-radius: 5px;
}

p.round2 {
    border: 2px solid red;
    border-radius: 8px;
}

p.round3 {
    border: 2px solid red;
    border-radius: 12px;
}
</style>
</head>
<body>

<h2>The border-radius Property</h2>
<p>This property is used to add rounded borders to an element:</p>

<p class="normal">Normal border</p>
<p class="round1">Round border</p>
<p class="round2">Rounder border</p>
<p class="round3">Roundest border</p>

<p><b>Note:</b> The "border-radius" property is not supported in IE8 and earlier versions.</p>

</body>
</html>