
        // InlineEditor
        //     .create( document.querySelector( '#edit'))
        //     .catch( error => {
        //         console.error( error );
        //     } );
        //
        // InlineEditor
        //     .create( document.querySelector( '#editor') )
        //     .catch( error => {
        //         console.error( error );
        //     } );

            // Turn off automatic editor creation first.
            CKEDITOR.disableAutoInline = true;
            CKEDITOR.inline( 'titreedit' );
            CKEDITOR.inline( 'descredit' );
            CKEDITOR.inline( 'galleryedit' );
