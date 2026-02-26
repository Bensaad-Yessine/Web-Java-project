
$content = Get-Content "templates\user\index.html.twig" -Raw
$ifCount = ([regex]::Matches($content, "{%\s*if")).Count
$endifCount = ([regex]::Matches($content, "{%\s*endif")).Count
$forCount = ([regex]::Matches($content, "{%\s*for")).Count
$endforCount = ([regex]::Matches($content, "{%\s*endfor")).Count
$blockCount = ([regex]::Matches($content, "{%\s*block")).Count
$endblockCount = ([regex]::Matches($content, "{%\s*endblock")).Count

Write-Host "If: $ifCount, Endif: $endifCount"
Write-Host "For: $forCount, Endfor: $endforCount"
Write-Host "Block: $blockCount, Endblock: $endblockCount"

# Also check for unclosed {{ path(...) }} or similar? 
# Usually a white page is a fatal PHP error.
