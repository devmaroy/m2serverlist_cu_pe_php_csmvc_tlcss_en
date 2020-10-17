<?php require_once( 'partials/header.php' ); $count = 0;  ?>

<section class="home p-6">
	<div class="servers">
		<?php foreach ( $servers as $server ) : ?>
			<div class="w-full max-w-screen-lg mx-auto flex">
				<div class="border-b-r border-b border-t-1 border-gray-100 bg-white p-10 pl-0 flex flex-col justify-between leading-normal">
					<div class="mb-8">
						<?php if ( $server->vip ) : ?>
							<p class="mb-4 text-sm text-gray-600 flex items-center">
								<svg viewBox="0 0 24 24" class="fill-current text-orange-300 w-4 h-4 mr-2">
									<path d="M8.128 19.825a1.586 1.586 0 0 1-1.643-.117 1.543 1.543 0 0 1-.53-.662 1.515 1.515 0 0 1-.096-.837l.736-4.247-3.13-3a1.514 1.514 0 0 1-.39-1.569c.09-.271.254-.513.475-.698.22-.185.49-.306.776-.35L8.66 7.73l1.925-3.862c.128-.26.328-.48.577-.633a1.584 1.584 0 0 1 1.662 0c.25.153.45.373.577.633l1.925 3.847 4.334.615c.29.042.562.162.785.348.224.186.39.43.48.704a1.514 1.514 0 0 1-.404 1.58l-3.13 3 .736 4.247c.047.282.014.572-.096.837-.111.265-.294.494-.53.662a1.582 1.582 0 0 1-1.643.117l-3.865-2-3.865 2z" />
								</svg>
								VIP
							</p>
						<?php endif; ?>

						<div class="<?php echo $server->vip ? "text-orange-500 " : "text-gray-900" ?> font-bold text-2xl mb-3">
							<?php echo ++$count . '.'; ?>
							<?php echo htmlspecialchars( $server->name ); ?>
						</div>
						<p class="text-gray-600 text-base leading-8"><?php echo htmlspecialchars( $server->description ); ?></p>
					</div>
					<div class="flex items-center">
						<div class="text-sm">
							<a href="<?php echo $server->website; ?>" target="_blank" class="flex items-center bg-red-500 hover:bg-red-400 text-white font-bold py-3 px-4 border-b-4 border-red-700 hover:border-red-500 rounded uppercase">
								Visit website

								<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="ml-2 w-4 h-4">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
								</svg>
							</a>
						</div>
					</div>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
</section>

<?php require_once( 'partials/footer.php' ); ?>

