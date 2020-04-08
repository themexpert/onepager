<?php ?>

<div class="wrap">
    <h1 class="wp-heading-inline"><?php _e('Add New Template', 'tx-onepager'); ?></h1>

    <form action="" method="post" enctype="multipart/form-data">
        <table class="form-table">
            <tbody>
                <tr>
                    <th scope="row">
                        <label for="import-template-json"><?php _e( 'Upload .JSON File', 'tx-onepager' ); ?></label>
                    </th>
                    <td>
                        <!-- <input type="text" name="name" id="name" class="regular-text" value=""> -->
                        <input type="file" name="import-template-json" id="import-template-json" accept="application/json">
                    </td>
                </tr>
            </tbody>
        </table>

        <?php wp_nonce_field( 'upload-template-nonce' ); ?>
        <?php submit_button( __( 'Import Template', 'tx-onepager' ), 'primary', 'upload_template_button' ); ?>
    </form>
</div>