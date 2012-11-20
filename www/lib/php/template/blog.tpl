<script type="text/javascript">
<!--
window.location = "http://www.samcreate.com/"
//-->
</script>
    	<div id="MainContent" role="main">
			<div id="mContainer">

			<ul id="blog">
				{block:Posts}
					{block:Text}
					<li class="post">
						<time><div><span class="month">{ShortMonth}</span><span class="day">{DayOfMonth}</span></div></time>
						{block:Title}
						<h2><a href="/post/{PostID}"><span>{</span> {Title} <span>}</span></a></h2>
						{/block:Title}
						<div class="p_holder">
							{Body}
						</div>
						<span class="end">~</span>
					</li>
					{/block:Text}
					{block:Audio}
					<li class="post audio">

						<time><div><span class="month">{ShortMonth}</span><span class="day">{DayOfMonth}</span></div></time>
						
						<h2><a href="/post/{PostID}"><span>{</span> Audio <span>}</span></a></h2>
						
						<div class="p_holder">
							<p class="player">{AudioPlayerBlack}</p>
							{block:Caption}
                            <div class="caption">{Caption}</div>
                        	{/block:Caption}
						</div>
						<span class="end">~</span>
					</li>
					{/block:Audio}
					{block:Photo}
	                    <li class="post photo clearfix">
							<time><div><span class="month">{ShortMonth}</span><span class="day">{DayOfMonth}</span></div></time>
							<h2><a href="/post/{PostID}"><span>{</span> Foto <span>}</span></a></h2>
							<div class="p_holder">
                                    {block:Caption}
    	                            <div class="caption">{Caption}</div>
		                        {/block:Caption}
								    <img class="single" src="{PhotoURL-500}" alt="{PhotoAlt}"/>      
								
							</div>
							<span class="end">~</span>
	                    </li>
	                {/block:Photo}
					{block:Photoset}
						<li class="post photo set clearfix">
							<time><div><span class="month">{ShortMonth}</span><span class="day">{DayOfMonth}</span></div></time>
							
							<h2><a href="/post/{PostID}"><span>{</span> Fotos <span>}</span></a></h2>
							
							<div class="p_holder">
                                
								
                                {block:Photos} 
                                    <img src="{PhotoURL-500}" alt="{PhotoAlt}"/>
                                {/block:Photos}
								{block:Caption}
		                            <div class="caption">{Caption}</div>
		                        {/block:Caption}
							</div>
							<span class="end">~</span>
	                    </li>
	                {/block:Photoset}
					{block:Video}
	                    <li class="post video">
							<time><div><span class="month">{ShortMonth}</span><span class="day">{DayOfMonth}</span></div></time>
							{block:Title}
							<h2><a href="/post/{PostID}"><span>{</span> {Title} <span>}</span></a></h2>
							{/block:Title}
							<div class="p_holder">
								{Video-500}
								{block:Caption}
		                            <div class="caption">{Caption}</div>
		                        {/block:Caption}
							</div>
							<span class="end">~</span>
	                    </li>
	                {/block:Video}
					{block:Quote}
					<li class="post quote">
						<time><div><span class="month">{ShortMonth}</span><span class="day">{DayOfMonth}</span></div></time>
						
						<div class="p_holder">
							<big class="quote">“</big>
							<blockquote>{Quote}</blockquote>
							{block:Source}
	                            <cite>{Source}</cite>
	                        {/block:Source}
						</div>
						<span class="end">~</span>
                    </li>
	                {/block:Quote}
				
				{/block:Posts}
			</ul>
			
		        <nav id="pageNav">
		           <ul class="clearfix">
                   {block:Pagination}
		             {block:PreviousPage}<li><a href="{PreviousPage}" id="pageNavNewer">Future</a></li>{/block:PreviousPage} 
		             {block:JumpPagination length="5"}
		             {block:CurrentPage}<li class="active"><a href="{URL}" >{PageNumber}</a></li>{/block:CurrentPage}
		             {block:JumpPage}<li><a href="{URL}">{PageNumber}</a></li>{/block:JumpPage}
		             {/block:JumpPagination}
		             {block:NextPage}<li><a href="{NextPage}" id="pageNavOlder">Past</a></li>{/block:NextPage} 
                     {/block:Pagination} 
                     {block:PermalinkPage}
                     
                        <li><a href="/" id="pageNavOlder">Home</a></li>
                     {/block:PermalinkPage}
		           </ul>
		        </nav>
		     
             
			</div>
		</div>