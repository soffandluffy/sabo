<ul id="nav-mobile" class="right hide-on-med-and-down">
	<li><a href="{ route('home') }">Home</a></li>
</ul>

<!-- <ul id="nav-mobile" class="right hide-on-med-and-down">
	foreach(menus->where('parent_id', null)->sortBy('order') as parent)
		if(parent->url != '#')
			<li><a href="{parent->url}">{parent->name}</a></li>
		else
			<li><a class="dropdown-trigger" href="#" data-target="{strtolower(parent->name)}">{parent->name}<i class="material-icons right">arrow_drop_down</i></a></li>
		endif
	
		php
			children = menus->where('parent_id', parent->id);
		endphp
		if(!children->isEmpty())
			<ul id="{ strtolower(parent->name) }" class="dropdown-content">
				foreach(children->sortBy('order') as child)
					if(child->url != '#')
						if(child->tag != "")
						<li><a href="/pages/{ child->tag }">{child->name}</a></li>
						else
						<li><a href="{ child->url }">{child->name}</a></li>
						endif
					else
					<li><a class="dropdown-trigger2 trg{strtolower(child->name)}" href="{ child->url }" data-target="{strtolower(child->name)}">{child->name}</a></li>
					endif

					php
						subchilds = menus->where('parent_id', child->id);
					endphp
					if(!subchilds->isEmpty())
					<ul id="{strtolower(child->name)}" class="dropdown-content">
					    foreach(subchilds->sortBy('order') as subchild)
					    	if(subchild->tag != "")
					    	<li><a href="/pages/{subchild->tag}">{subchild->name}</a></li>
					    	else
					    	<li><a href="{subchild->url}">{subchild->name}</a></li>
					    	endif
					    endforeach
				  	</ul>
					endif
				endforeach
			</ul>
		endif
	endforeach
</ul> -->