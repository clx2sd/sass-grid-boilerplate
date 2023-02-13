
	<!-- Introduction -->
	<div class="container pt-gutter-6 bottom-border">
		<div class="row">
			<div class="col-12 pb-gutter-2">
				<h1>Lightweight Flexbox/SCSS Grid System</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-12 pb-gutter-5">
				<p>A lightweight alternative to bootstrap which emulates the 12 col flexbox grid system, adds a few features such as easily re-definable breakpoints, more advanced spacing functionality, variable gutters / container sizing per breakpoint - while also omitting a lot of bloat.</p>
				<p>The key features of this grid system are the ability to define <strong>container width</strong>, <strong>container padding</strong> and <strong>gutter width</strong> per breakpoint, as well as extended use of grid components such as spacing, including margin/padding which can be <strong>relative to the defined gutter width</strong>.</p>
				<p>Every componant such as height classes, shift/ordering, the breakpoint helper and so on, can all be toggled on or off to minimise the CSS filesize. Additional features include the ability to <strong>reference the exact column or gutter width</strong> at any point via a CSS variable and components such as <strong>show/hide</strong>, <strong>stretch/overflow</strong>, <strong>shift up/down</strong> and <strong>ordering</strong>.</p>
			</div>
		</div>
	</div>
	<!-- Introduction -->
	

	<!-- Basic Grid System -->
	<div class="container pt-gutter-5 pb-gutter-2">
		<div class="row">
			<div class="col-12 pb-gutter-1">
				<h2>Basic Grid System</h2>
			</div>
			<div class="col-12">
				<p>A classic 12 column 'bootstrap style' flexbox grid system which uses the basic format <strong>.container > .row > .col-X</strong>.</p>
				<p>Additional classes are used to adjust the layout across each breakpoint such as <strong>.col-lg-12</strong> or <strong>.col-md-6</strong> and so on.</p>
			</div>
		</div>
	</div>
	<div class="container pb-gutter-4 bottom-border">
		<div class="row">
			<div class="col-12 col-md-4 col-lg-3 visible mb-2">
				<div>
					<p>.col-12 + .col-md-4 + .col-lg-3</p>			
				</div>
			</div>
			<div class="col-12 col-md-4 col-lg-6 visible mb-2">
				<div>
					<p>.col-12 + .col-md-4 + .col-lg-6</p>
				</div>
			</div>
			<div class="col-12 col-md-4 col-lg-3 visible mb-2">
				<div>
					<p>.col-12 + .col-md-4 + .col-lg-3</p>			
				</div>
			</div>
		</div>
	</div>
	<!-- // Basic Grid System -->


	<!-- Offsets -->
	<div class="container pt-gutter-5 pb-gutter-2">
		<div class="row">
			<div class="col-12 pb-gutter-1">
				<h2>Offsets</h2>
			</div>
			<div class="col-12">
				<p>Offset classes can be used to shift columns across the grid.</p>
			</div>
		</div>
	</div>
	<div class="container pb-gutter-4 bottom-border">
		<div class="row">
			<div class="col-12 col-lg-6 offset-lg-3 visible mb-2">
				<div>
					<p>.col-12 + .col-lg-6 + .offset-lg-3</p>			
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12 col-lg-3 visible mb-2">
				<div>
					<p>.col-12 + .col-lg-3</p>			
				</div>
			</div>
			<div class="col-12 col-lg-3 offset-lg-6 visible mb-2">
				<div>
					<p>.col-12 + .col-lg-3 + .offset-lg-6</p>			
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-1 visible py-2"><div></div></div>
			<div class="col-1 visible py-2"><div></div></div>
			<div class="col-1 visible py-2"><div></div></div>
			<div class="col-1 visible py-2"><div></div></div>
			<div class="col-1 visible py-2"><div></div></div>
			<div class="col-1 visible py-2"><div></div></div>
			<div class="col-1 visible py-2"><div></div></div>
			<div class="col-1 visible py-2"><div></div></div>
			<div class="col-1 visible py-2"><div></div></div>
			<div class="col-1 visible py-2"><div></div></div>
			<div class="col-1 visible py-2"><div></div></div>
			<div class="col-1 visible py-2"><div></div></div>
		</div>
	</div>
	<!-- // Offsets -->


	<!-- Ordering -->
	<div class="container pt-gutter-5 pb-gutter-2">
		<div class="row">
			<div class="col-12 pb-gutter-1">
				<h2>Ordering</h2>
			</div>
			<div class="col-12">
				<p>Ordering classes can be used to adjust the order of columns per breakpoint.</p>
			</div>
		</div>
	</div>
	<div class="container pb-gutter-4 bottom-border">
		<div class="row">
			<div class="col-12 order-1 col-lg-4 order-lg-3 visible mb-2">
				<div>
					<p><strong>1st</strong></p>			
				</div>
			</div>
			<div class="col-12 order-2 col-lg-4 order-lg-2 visible mb-2">
				<div>
					<p><strong>2nd</strong></p>
				</div>
			</div>
			<div class="col-12 order-3 col-lg-4 order-lg-1 visible mb-2">
				<div>
					<p><strong>3rd</strong></p>			
				</div>
			</div>
		</div>
	</div>
	<!-- // Ordering -->


	<!-- Spacing - Margins/Padding -->
	<div class="container pt-gutter-5 pb-gutter-4 bottom-border">
		<div class="row">
			<div class="col-12 pb-gutter-1">
				<h2>Spacing - Margins/Padding</h2>
			</div>
			<div class="col-12">

				<p>There are a number of classes and mixins which can be used directly in the SCSS or in the markup to determine y-axis margins and paddings across each breakpoint.</p>
				<p>The variable <strong>$spacer</strong> can be defined in <strong>_grid.scss</strong> and then re-used throughout the SCSS, to ensure layout margins and paddings remain uniform. This variable also informs the standard margin/padding classes. For example, if the variable <strong>$spacer</strong> is defined as <strong>10px</strong> - the class <strong>.mt-5</strong> will add margin-top: <strong>50px</strong>.</p>

				<p>Equivelant mixins are also generated for all of these classes for use in the SCSS. For example <strong>@include mt(5)</strong> will add a top margin of <strong>50px ($spacer*5)</strong>.</p>

				<p>It is also possible to define the <strong>$spacer</strong> with <strong>vw</strong> units, meaning the margins and paddings will always scale in conjunction with the width of the viewport.</p><br>

				<h3>Column width as $spacer</h3><br>

				<p>With the column width calculated and accessible across all breakpoints it is possible to use the <strong>var(--column-width)</strong> in the <strong>$spacer</strong> variable, or fractions/multiples thereof. For example <strong>$spacer: calc( var(--column-width) / 4 );</strong> will give the <strong>$spacer</strong> variable a value of a quarter of the column width, meaning the padding/margins will always scale exactly to the grid.</p><br>

			</div>
		</div>
	</div>
	<!-- // Spacing - Margins/Padding -->


	<!-- Spacing - Gutters -->
	<div class="container pt-gutter-5 pb-gutter-4 bottom-border">
		<div class="row">
			<div class="col-12 pb-gutter-1">
				<h2>Spacing - Gutters</h2>
			</div>
			<div class="col-12">

				<p>A second set of mixins and classes enable the definition of <strong>margins and padding that correspond exactly to the defined gutter width</strong> across each breakpoint.</p>
				<p>For example the use of the class <strong>.mt-gutter-2</strong> will add a top margin of <strong>2 * var(--gutter-width)</strong>, whatever the CSS variable <strong>--gutter-width</strong> may be defined as at each breakpoint. This allows for layouts that scale the defined margins or padding exactly to the gutter width.</p>
				<p>Similarly mixins are also built in to enable this functionality directly in the SCSS. For example <strong>@include mt-gutter-md(2)</strong>, will add a top margin of <strong>2 * var(--gutter-width)</strong> on the <strong>md</strong> breakpoint, within the CSS.</p>

			</div>
		</div>
	</div>
	<!-- // Spacing - Gutters -->


	<!-- Spacing - Y-Axis -->
	<div class="container pt-gutter-5 pb-gutter-4 bottom-border">
		<div class="row">
			<div class="col-12 pb-gutter-1">
				<h2>Spacing - Y-Axis</h2>
			</div>
			<div class="col-12">

				<p>All of the above conventions such as gutter width, $spacer and @include can be used on the y-axis as well. For example <strong>@include my-sm(4)</strong>, for a margin-left and margin-right ( ie. margin Y ) of 4 * $spacer.</p>
				<p>This works for y/r/l padding and margin classes including gutter classes.</p>

			</div>
		</div>
	</div>
	<!-- // Spacing - Y-Axis -->


	<!-- Nested Columns -->
	<div class="container pt-gutter-5 pb-gutter-2">
		<div class="row">
			<div class="col-12 pb-gutter-1">
				<h2>Nested Columns</h2>
			</div>
			<div class="col-12">

				<p>Inserting an additional <strong>.row</strong> inside a div.col-x enables nested rows/columns which are adjusted to match the grid.</p>

			</div>
		</div>
	</div>
	<div class="container pb-gutter-4 bottom-border">
		<div class="row">
			<div class="col-12 col-md-8 visible mb-2">
				<div>
					<p>Top Level</p>
				</div>
			</div>
			<div class="col-12 col-md-4">
				<div class="row">
					<div class="col-12 visible mb-2">
						<div>
							<p>2nd Level</p>
						</div>
					</div>
					<div class="col-12">
						<div class="row">
							<div class="col-6 visible mb-2">
								<div>
									<p>3nd Level</p>
								</div>
							</div>
							<div class="col-6 visible mb-2">
								<div>
									<p>3nd Level</p>
								</div>
							</div>				
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- // Nested Columns -->


	<!-- Stretch -->
	<div class="container pt-gutter-5 pb-gutter-2">
		<div class="row">
			<div class="col-12 pb-gutter-1">
				<h2>Stretch / Overflow</h2>
			</div>
			<div class="col-12">
				<p>The <strong>.stretch-</strong> component allows for content within a .col- to overflow by a specified # of column widths, while remaining true to the grid.</p>
				<p>This can be adjusted, enabled or disabled per breakpoint (eg. <strong>.stretch-left-md-2</strong>), and specified to overflow to the left or right side of it's parent.</p>
				<p>The stretch class can be used to break elements outside of the grid, as well as easily <strong>enabling and controlling overlapping</strong> of sections/elements, while adhering to the grid.</p>
				<p>It is also available as a mixin using <strong>@include stretch-[left/right]-[breakpoint]-[#]</strong>, eg. <strong>@include stretch-left-md-2</strong></p>
			</div>
		</div>
	</div>
	<div class="container pb-gutter-4 bottom-border">
		<div class="row mb-gutter-1">
			<div class="col-1 py-2 visible"><div></div></div>
			<div class="col-1 py-2 visible"><div></div></div>
			<div class="col-1 py-2 visible"><div></div></div>
			<div class="col-1 py-2 visible"><div></div></div>
			<div class="col-1 py-2 visible"><div></div></div>
			<div class="col-1 py-2 visible"><div></div></div>
			<div class="col-1 py-2 visible"><div></div></div>
			<div class="col-1 py-2 visible"><div></div></div>
			<div class="col-1 py-2 visible"><div></div></div>
			<div class="col-1 py-2 visible"><div></div></div>		
			<div class="col-1 py-2 visible"><div></div></div>		
			<div class="col-1 py-2 visible"><div></div></div>		
		</div>
		<div class="row">
			<div class="col-6 offset-3 visible py-gutter-1 mb-gutter-1">	
				<div>
					<div class="stretch-right-3 py-gutter-4 dashed text-align-left">
						<div class="row">
							<div class="col-8">
								<p>Stretch / overflow to the right for 3 columns using <strong>.stretch-right-3</strong>.</p>		
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-6 offset-3 visible py-gutter-1 mb-gutter-1">	
				<div>
					<div class="stretch-left-3 py-gutter-4 dashed text-align-left">
						<div class="row">
							<div class="col-8">
								<p>Stretch / overflow to the left for 3 columns using <strong>.stretch-left-3</strong>.</p>	
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row mb-gutter-1">
			<div class="col-1 py-2 visible"><div></div></div>
			<div class="col-1 py-2 visible"><div></div></div>
			<div class="col-1 py-2 visible"><div></div></div>
			<div class="col-1 py-2 visible"><div></div></div>
			<div class="col-1 py-2 visible"><div></div></div>
			<div class="col-1 py-2 visible"><div></div></div>
			<div class="col-1 py-2 visible"><div></div></div>
			<div class="col-1 py-2 visible"><div></div></div>
			<div class="col-1 py-2 visible"><div></div></div>
			<div class="col-1 py-2 visible"><div></div></div>
			<div class="col-1 py-2 visible"><div></div></div>		
			<div class="col-1 py-2 visible"><div></div></div>		
		</div>
	</div>
	<!-- // Stretch -->

	<!-- Shift -->
	<div class="container pt-gutter-5 pb-gutter-2">
		<div class="row">
			<div class="col-12 pb-gutter-1">
				<h2>Shift</h2>
			</div>
			<div class="col-12 pb-gutter-1">
				<p>The shift classes and mixins can be used to shift sections/elements up or down in increments equal to either <strong>$spacer</strong>, <strong>--column-width</strong> or <strong>--gutter-width</strong>.</p>
			</div>
		</div>
	</div>
	<div class="container pb-gutter-4 bottom-border">
		<div class="row">
			<div class="col-4 py-gutter-2 visible">
				<div></div>
			</div>
			<div class="col-4 py-0 visible">
				<div>
					<div class="dashed py-gutter-2 shift-up-gutter-2">
						<p>.shift-up-gutter-2</p>
					</div>
				</div>
			</div>
			<div class="col-4 py-0 visible">			
				<div>
					<div class="dashed py-gutter-2 shift-down-gutter-2">
						<p>.shift-down-gutter-2</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- // Shift -->


	<!-- Flush -->
	<div class="container pt-gutter-5 pb-gutter-2">
		<div class="row">
			<div class="col-12 pb-gutter-1">
				<h2>Flush</h2>
			</div>
			<div class="col-12">
				<p>Force a column item within a fixed width ( standard ) .container, to become 'flush' to the edges of the viewport, and retain the correct padding etc.This can be useful for making a fixed width imagebecome full width on mobile for example.</p>
			</div>
		</div>
	</div>
	<div class="container pb-gutter-4 bottom-border">
		<div class="row">
			<div class="col-12 mb-gutter-1 visible dashed">
				<div>
					<p>This is a .col-12 within a fixed width ( standard ) .container</p>
				</div>
			</div>
			<div class="col-12 flush visible dashed">
				<div>
					<p>This is a <strong>flush</strong> .col-12 within a fixed width ( standard ) .container</p>
				</div>
			</div>
		</div>
	</div>
	<!-- // Flush -->

