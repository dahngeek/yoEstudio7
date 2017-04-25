!= View::make('decoy::shared.form._header', $__data)->render()

%fieldset
  .legend= empty($item) ? 'New' : 'Edit'
  != Former::text('title')
  != Former::image()
  != Former::image('marquee')
  != Former::wysiwyg('body')

%fieldset
  != View::make('decoy::shared.form._display_module', $__data)->render()
  != Former::date('date')->value('now')

!= View::make('decoy::shared.form._footer', $__data)->render()