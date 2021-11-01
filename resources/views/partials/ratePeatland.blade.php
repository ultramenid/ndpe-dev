@if ($item->peatlanddestruc == 1 )
<div class="rounded-full h-4 w-4 bg-red-700 border">&nbsp;</div>
<div class="rounded-full h-4 w-4 bg-transparet border">&nbsp;</div>
<div class="rounded-full h-4 w-4 bg-transparet border">&nbsp;</div>
@elseif ($item->peatlanddestruc == 2)
<div class="rounded-full h-4 w-4 bg-yellow-400 border">&nbsp;</div>
<div class="rounded-full h-4 w-4 bg-yellow-400 border">&nbsp;</div>
<div class="rounded-full h-4 w-4 bg-transparet border">&nbsp;</div>
@elseif ($item->peatlanddestruc == 3)
<div class="rounded-full h-4 w-4 bg-more border">&nbsp;</div>
<div class="rounded-full h-4 w-4 bg-more border">&nbsp;</div>
<div class="rounded-full h-4 w-4 bg-more border">&nbsp;</div>
@endif
