<?php require_once( 'partials/header.php' );  ?>

<?php
	// Extract errors and fields if we have some
	if ( isset( $errors ) ) extract( $errors );
	if ( isset( $fields ) ) extract( $fields );
?>

<section class="add-server p-6">
	<div class="pt-10 pb-6 w-full max-w-screen-lg mx-auto flex">
		<h2 class="text-4xl font-medium text-gray-700">Add new server</h2>
	</div>

	<div class="pt-10 w-full max-w-screen-lg mx-auto flex">
		<form method="POST" action="/add-server" class="w-full max-w-3xl">
			<div class="flex flex-wrap -mx-3 mb-6">
				<div class="w-full px-3 mb-6 md:mb-0">
					<label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-server-name">
						Server Name
					</label>
					<input name="server_name" value="<?php echo isset( $server_name ) ? $server_name : '' ?>" class="<?php echo isset($server_name_error) ? 'border border-red-700' : ''  ?> appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-server-name" type="text">

			     	<?php echo isset( $server_name_error ) ? "<p class='text-xs font-medium text-red-700 mt-2'>$server_name_error</p>" : '';  ?>
				</div>
			</div>
			<div class="flex flex-wrap -mx-3 mb-6">
				<div class="w-full px-3 mb-6 md:mb-0">
					<label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-server-name">
						Server Website
					</label>
					<input name="server_website" value="<?php echo isset( $server_website ) ? $server_website : '' ?>" class="<?php echo isset($server_website_error) ? 'border border-red-700' : ''  ?> appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-server-name" type="text">

					<?php echo isset( $server_website_error ) ? "<p class='text-xs font-medium text-red-700 mt-2'>$server_website_error</p>" : '';  ?>
				</div>
			</div>
			<div class="flex flex-wrap -mx-3 mb-6">
				<div class="w-full px-3">
					<label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-description">
						Server Description
					</label>
					<textarea name="server_description" class="<?php echo isset($server_description_error) ? 'border border-red-700' : ''  ?> appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-description" rows="10"><?php echo isset( $server_description ) ? $server_description : '' ?></textarea>
					<p class="text-gray-600 text-xs italic">Write a straightforward description of the server.</p>

					<?php echo isset( $server_description_error ) ? "<p class='text-xs font-medium text-red-700 mt-2'>$server_description_error</p>" : '';  ?>
				</div>
			</div>
			<div class="flex flex-wrap -mx-3 mb-2">
				<div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
					<label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-vip">
						VIP
					</label>
					<div class="relative">
						<select name="server_vip" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-vip">
							<option value="0">No</option>
							<option value="1">Yes</option>
						</select>
						<div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
							<svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
						</div>
					</div>

					<?php echo isset( $server_vip_error ) ? '<p class="text-xs font-medium text-red-700 mt-2">$server_vip_error</p>' : '';  ?>

				</div>
			</div>

			<div class="flex justify-end">
				<button class="mt-10 bg-blue-500 hover:bg-blue-700 text-white font-bold py-3 px-5 rounded">
					Submit
				</button>
			</div>
		</form>
	</div>
</section>

<?php require_once( 'partials/footer.php' ); ?>

