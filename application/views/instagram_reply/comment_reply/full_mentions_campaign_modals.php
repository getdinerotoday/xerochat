<div class="modal fade" id="full_auto_reply_message_modal" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-lg" style="min-width: 70%;max-width: 70%">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" style="padding: 10px 20px 10px 20px;" ><?php echo $this->lang->line("Please give the following information for Full account reply") ?></h5>
                <button type="button" id='full_modal_close' class="close">&times;</button>

            </div>

            <form action="#" id="full_auto_reply_info_form" method="post">
                <input type="hidden" name="full_auto_reply_page_id" id="full_auto_reply_page_id" value="">
                <div class="modal-body" id="full_auto_reply_message_modal_body">
                    <!-- comment hide and delete section -->
                    <div class="row" style="padding: 10px 20px 10px 20px; <?php if (!$commnet_hide_delete_addon) echo "display: none;"; ?> ">
                        <div class="col-12" style="margin-bottom: 20px;">
                        	<div class="row">									
                        		<div class="col-12 col-md-6">
                        			<label><i class="fa fa-ban"></i> <?php echo $this->lang->line("what do you want about offensive comments?") ?></label>
                        		</div>
                        		<div class="col-12 col-md-6">
                        			<div class="row">
                        			  <div class="col-12 col-md-6">
                        				<label class="custom-switch">
                        				  <input type="radio" name="full_delete_offensive_comment" value="hide" id="full_delete_offensive_comment_hide" class="custom-switch-input" checked>
                        				  <span class="custom-switch-indicator"></span>
                        				  <span class="custom-switch-description"><?php echo $this->lang->line('hide'); ?></span>
                        				</label>
                        			  </div>
                        			  <div class="col-12 col-md-6">
                        				<label class="custom-switch">
                        				  <input type="radio" name="full_delete_offensive_comment" value="delete" id="full_delete_offensive_comment_delete" class="custom-switch-input">
                        				  <span class="custom-switch-indicator"></span>
                        				  <span class="custom-switch-description"><?php echo $this->lang->line('delete'); ?>
                        				</label>
                        			  </div>
                        			</div>
                        		</div>
                        	</div>
                        </div>

                        <br/><br/>

                        <div class="col-12 col-md-12" id="full_delete_offensive_comment_keyword_div">
                            <div class="form-group" style="border: 1px dashed #e4e6fc;padding: 10px;">
                                <label><i class="fa fa-tag"></i> <?php echo $this->lang->line("write down the offensive keywords in comma separated") ?>
                                </label>
                                <textarea class="form-control full_message" name="full_delete_offensive_comment_keyword" id="full_delete_offensive_comment_keyword" placeholder="<?php echo $this->lang->line("Type keywords here in comma separated (keyword1,keyword2)...Keep it blank for no actions") ?>" style="height:70px !important;"></textarea>
                            </div>
                        </div>
                    </div>

                    <!-- end of comment hide and delete section -->


                    <div class="row" style="padding: 10px 20px 10px 20px;">

                        <div class="col-12">
                        	<div class="row">									
                        		<div class="col-12 col-md-6"><label><i class="fa fa-sort-numeric-down"></i> <?php echo $this->lang->line("Do you want to reply comments of a user multiple times?") ?></label></div>
                        		<div class="col-12 col-md-6">
                        		  <div class="form-group">
                        			<label class="custom-switch">
                        			  <input type="checkbox" name="full_multiple_reply" value="yes" id="full_multiple_reply" class="custom-switch-input">
                        			  <span class="custom-switch-indicator"></span>
                        			  <span class="custom-switch-description"><?php echo $this->lang->line('Yes');?></span>
                        			</label>
                        		  </div>
                        		</div>
                        	</div>
                        </div>

                        <div class="smallspace clearfix"></div>

                        <!-- comment hide and delete section -->

                        <div class="col-12" <?php if (!$commnet_hide_delete_addon) echo "style='display: none;'"; ?>>

                            <div class="row">									
                            	<div class="col-12 col-md-6"><label><i class="fa fa-eye-slash"></i> <?php echo $this->lang->line("do you want to hide comments after comment reply?") ?></label></div>
                            	<div class="col-12 col-md-6">
                            	  <div class="form-group">
                            		<label class="custom-switch">
                            		  <input type="checkbox" name="full_hide_comment_after_comment_reply" value="yes" id="full_hide_comment_after_comment_reply" class="custom-switch-input">
                            		  <span class="custom-switch-indicator"></span>
                            		  <span class="custom-switch-description"><?php echo $this->lang->line('Yes');?></span>
                            		</label>
                            	  </div>
                            	</div>
                            </div>

                        </div>

                        <!-- comment hide and delete section -->


                        <br/><br/>

                        <div class="col-12">
                          <div class="custom-control custom-radio">
                        	<input type="radio" name="full_message_type" value="generic" id="full_generic" class="custom-control-input radio_button">
                        	<label class="custom-control-label" for="full_generic"><?php echo $this->lang->line("generic comment reply for all") ?></label>
                          </div>
                          <div class="custom-control custom-radio">
                        	<input type="radio" name="full_message_type" value="filter" id="full_filter" class="custom-control-input radio_button">
                        	<label class="custom-control-label" for="full_filter"><?php echo $this->lang->line("send comment reply by filtering word/sentence") ?></label>
                          </div>
                        </div>

                        <div class="col-12" style="margin-top: 15px;">

                            <div class="form-group">
                                <label><i class="fa fa-monument"></i> <?php echo $this->lang->line("auto reply campaign name") ?> <span class="red">*</span>
                                </label>

                                <input class="form-control" type="text" name="full_auto_campaign_name" id="full_auto_campaign_name" placeholder="<?php echo $this->lang->line("write your auto reply campaign name here") ?>">
                            </div>
                        </div>

                        <div class="col-12" id="full_generic_message_div" style="display: none;">

                            <div class="form-group" style="border: 1px dashed #e4e6fc; padding: 10px;">
                                <label><i class="fa fa-envelope"></i>  <?php echo $this->lang->line("comment reply text") ?> 
                                	<span class="red">*</span>
                                    <a href="#" data-placement="bottom" data-toggle="popover" data-trigger="focus" title="<?php echo $this->lang->line("message") ?>" data-content="<?php echo $this->lang->line("write your message which you want to send. You can customize the message by individual commenter name."); ?>  Spintax example : {Hello|Howdy|Hola} to you, {Mr.|Mrs.|Ms.} {{Jason|Malina|Sara}|Williams|Davis}"><i class='fa fa-info-circle'></i> </a>
                                </label>

                                <span class='float-right'>
                                	<a title="<?php echo $this->lang->line("You can tag user in your comment reply. Facebook will notify them about mention whenever you tag.") ?>" data-placement="top" data-toggle="tooltip"
                                   class='btn btn-default btn-sm full_lead_tag_name button-outline'><i class='fa fa-tags'></i> <?php echo $this->lang->line("mention user") ?></a>
                            	</span>

                                <span class='float-right'>
                                	<a title="<?php echo $this->lang->line("You can include #LEAD_USER_NAME# variable inside your message. The variable will be replaced by real username when we will send it.") ?>" data-placement="top" data-toggle="tooltip" class='btn btn-default btn-sm full_lead_first_name button-outline'><i class='fa fa-user'></i> <?php echo $this->lang->line("Username") ?></a>
                            	</span>

                              	<div class="clearfix"></div>
                                	<textarea class="form-control full_message" name="full_generic_message" id="full_generic_message" placeholder="<?php echo $this->lang->line("type your comment reply here...") ?>" style="height:170px !important;"></textarea>
                        	</div>
                        </div>

                        <div class="col-12" id="full_filter_message_div" style="display: none;">

                            <?php for ($i = 1; $i <= 20; $i++) : ?>

                                <div class="form-group" id="full_filter_div_<?php echo $i; ?>" style="border: 1px dashed #e4e6fc; padding: 10px; margin-bottom: 50px;">

                                    <label><i class="fa fa-tag"></i> <?php echo $this->lang->line("filter word/sentence") ?> 
                                    <span class="red">*</span>
                                    <a href="#" data-placement="bottom" data-toggle="popover" data-trigger="focus" title="<?php echo $this->lang->line("message") ?>" data-content="<?php echo $this->lang->line("Write the word or sentence for which you want to filter comment. For multiple filter keyword write comma separated. Example -   why, wanto to know, when") ?>"><i class='fa fa-info-circle'></i> </a>

                                    </label>

                                    <input class="form-control filter_word" type="text" name="full_filter_word_<?php echo $i; ?>" id="full_filter_word_<?php echo $i; ?>" placeholder="<?php echo $this->lang->line("write your filter word here") ?>">

                                    <br/>

                                    <br/>

                                    <label><?php echo $this->lang->line("comment reply text") ?><span class="red">*</span>
                                        <a href="#" data-placement="bottom" data-toggle="popover" data-trigger="focus" title="<?php echo $this->lang->line("message") ?>" data-content="<?php echo $this->lang->line("write your message which you want to send based on filter words. You can customize the message by individual commenter name."); ?>  Spintax example : {Hello|Howdy|Hola} to you, {Mr.|Mrs.|Ms.} {{Jason|Malina|Sara}|Williams|Davis}"><i class='fa fa-info-circle'></i> </a>
                                    </label>

                                    <span class='float-right'>
                                        <a title="<?php echo $this->lang->line("You can tag user in your comment reply. Facebook will notify them about mention whenever you tag.") ?>"data-placement="top" data-toggle="tooltip" class='btn btn-default btn-sm full_lead_tag_name button-outline'><i class='fa fa-tags'></i> <?php echo $this->lang->line("mention user") ?></a>
                                    </span>

                                    <span class='float-right'>
                                        <a title="<?php echo $this->lang->line("You can include #LEAD_USER_NAME# variable inside your message. The variable will be replaced by real username when we will send it.") ?>" data-placement="top" data-toggle="tooltip" class='btn btn-default btn-sm full_lead_first_name button-outline'><i class='fa fa-user'></i> <?php echo $this->lang->line("Username") ?></a>
                                    </span>
                                      <div class="clearfix"></div>
                                    <textarea class="form-control full_message" name="full_comment_reply_msg_<?php echo $i; ?>" id="full_comment_reply_msg_<?php echo $i; ?>" placeholder="<?php echo $this->lang->line("type your comment reply here...") ?>" style="height:170px !important;"></textarea>
                                </div>
                            <?php endfor; ?>

                            <br/>

                            <div class="clearfix">
                                <input type="hidden" name="full_content_counter" id="full_content_counter"/>
                                <button type="button" class="btn btn-sm btn-outline-primary float-right" id="full_add_more_button"><i class="fa fa-plus"></i> <?php echo $this->lang->line("add more filtering") ?></button>
                            </div>


                            <div class="form-group" id="nofilter_word_found_div" style="margin-top: 10px; border: 1px dashed #e4e6fc; padding: 10px;">
                                <label><i class="fa fa-envelope"></i> <?php echo $this->lang->line("comment reply if no matching found") ?>
                                    <a href="#" data-placement="bottom" data-toggle="popover" data-trigger="focus" title="<?php echo $this->lang->line("message") ?>" data-content="<?php echo $this->lang->line("Write the message,  if no filter word found. If you don't want to send message them, just keep it blank ."); ?>  Spintax example : {Hello|Howdy|Hola} to you, {Mr.|Mrs.|Ms.} {{Jason|Malina|Sara}|Williams|Davis}"><i class='fa fa-info-circle'></i> </a>
                                </label>
                                <span class='float-right'>
                                	<a title="<?php echo $this->lang->line("You can tag user in your comment reply. Facebook will notify them about mention whenever you tag.") ?>" data-placement="top" data-toggle="tooltip"
                                   class='btn btn-default btn-sm full_lead_tag_name button-outline'><i class='fa fa-tags'></i> <?php echo $this->lang->line("mention user") ?></a>
                            	</span>

	                            <span class='float-right'>
	                            	<a title="<?php echo $this->lang->line("You can include #LEAD_USER_NAME# variable inside your message. The variable will be replaced by real username when we will send it.") ?>" data-placement="top" data-toggle="tooltip" class='btn btn-default btn-sm full_lead_first_name button-outline'><i class='fa fa-user'></i> <?php echo $this->lang->line("Username") ?></a>
	                            </span>

                                <div class="clearfix"></div>

                                <textarea class="form-control full_message" name="full_nofilter_word_found_text" id="full_nofilter_word_found_text" placeholder="<?php echo $this->lang->line("type your comment reply here...") ?>" style="height:170px !important;"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <div class="clearfix"></div>
            <div class="modal-footer bg-whitesmoke" style="padding-left: 45px; padding-right: 45px; ">
                <div class="row">
                    <div class="col-6">
                        <button class="btn btn-lg btn-primary float-left" id="full_save_button"><i class='fas fa-save'></i> <?php echo $this->lang->line("Submit") ?></button>
                    </div>

                    <div class="col-6">
                        <button class="btn btn-lg btn-secondary float-right" id="full_modal_close"><i class='fas fa-times'></i> <?php echo $this->lang->line("cancel") ?></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="full_edit_auto_reply_message_modal" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-lg" style="min-width: 70%;max-width: 70%">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" style="padding: 10px 20px 10px 20px;" ><?php echo $this->lang->line("please give the following information for Edit Full Account Reply") ?></h5>
                <button type="button" id='full_edit_modal_close' class="close">&times;</button>
            </div>

            <form action="#" id="full_edit_auto_reply_info_form" method="post">
                <input type="hidden" name="full_edit_auto_reply_page_id" id="full_edit_auto_reply_page_id" value="">
                <input type="hidden" name="autoreply_table_id" id="autoreply_table_id" value="">
                <div class="modal-body" id="full_auto_reply_message_modal_body">

                    <div class="text-center waiting previewLoader">
                        <i class="fas fa-spinner fa-spin blue text-center" style="font-size: 40px;margin-bottom: 40px;"></i>
                    </div>

                    <div class="row" style="padding: 10px 20px 10px 20px; <?php if (!$commnet_hide_delete_addon) echo "display: none;"; ?> ">
                        <div class="col-12" style="margin-bottom: 20px;">
                            <div class="row">                                   
                                <div class="col-12 col-md-6">
                                    <label><i class="fa fa-ban"></i> <?php echo $this->lang->line("what do you want about offensive comments?") ?></label>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <label class="custom-switch">
                                                <input type="radio" name="full_delete_offensive_comment" value="hide" id="full_edit_delete_offensive_comment_hide" class="custom-switch-input" checked>
                                                <span class="custom-switch-indicator"></span>
                                                <span class="custom-switch-description"><?php echo $this->lang->line('hide'); ?></span>
                                            </label>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <label class="custom-switch">
                                                <input type="radio" name="full_delete_offensive_comment" value="delete" id="full_edit_delete_offensive_comment_delete" class="custom-switch-input">
                                                <span class="custom-switch-indicator"></span>
                                                <span class="custom-switch-description"><?php echo $this->lang->line('delete'); ?>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <br/><br/>

                        <div class="col-12 col-md-12" id="full_delete_offensive_comment_keyword_div">
                            <div class="form-group" style="border: 1px dashed #e4e6fc;padding: 10px;">
                                <label><i class="fa fa-tag"></i> <?php echo $this->lang->line("write down the offensive keywords in comma separated") ?>
                                </label>
                                <textarea class="form-control full_message" name="full_edit_delete_offensive_comment_keyword" id="full_edit_delete_offensive_comment_keyword" placeholder="<?php echo $this->lang->line("Type keywords here in comma separated (keyword1,keyword2)...Keep it blank for no actions") ?>" style="height:70px !important;"></textarea>
                            </div>
                        </div>
                    </div>


                <div class="row" style="padding: 10px 20px 10px 20px;">

                    <div class="col-12">
                        <div class="row">                                   
                            <div class="col-12 col-md-6"><label><i class="fa fa-sort-numeric-down"></i> <?php echo $this->lang->line("Do you want to reply comments of a user multiple times?") ?></label></div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label class="custom-switch">
                                        <input type="checkbox" name="full_edit_multiple_reply" value="yes" id="full_edit_multiple_reply" class="custom-switch-input">
                                        <span class="custom-switch-indicator"></span>
                                        <span class="custom-switch-description"><?php echo $this->lang->line('Yes');?></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12" <?php if (!$commnet_hide_delete_addon) echo "style='display: none;'"; ?>>

                        <div class="row">                                   
                            <div class="col-12 col-md-6"><label><i class="fa fa-eye-slash"></i> <?php echo $this->lang->line("do you want to hide comments after comment reply?") ?></label></div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label class="custom-switch">
                                        <input type="checkbox" name="full_edit_hide_comment_after_comment_reply" value="yes" id="full_edit_hide_comment_after_comment_reply" class="custom-switch-input">
                                        <span class="custom-switch-indicator"></span>
                                        <span class="custom-switch-description"><?php echo $this->lang->line('Yes');?></span>
                                    </label>
                                </div>
                            </div>
                        </div>

                    </div>


                    <br/><br/>

                    <div class="col-12">
                        <div class="custom-control custom-radio">
                            <input type="radio" name="full_edit_message_type" value="generic" id="full_edit_generic" class="custom-control-input radio_button">
                            <label class="custom-control-label" for="full_edit_generic"><?php echo $this->lang->line("generic comment reply for all") ?></label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" name="full_edit_message_type" value="filter" id="full_edit_filter" class="custom-control-input radio_button">
                            <label class="custom-control-label" for="full_edit_filter"><?php echo $this->lang->line("send comment reply by filtering word/sentence") ?></label>
                        </div>
                    </div>

                    <div class="col-12" style="margin-top: 15px;">

                        <div class="form-group">
                            <label><i class="fa fa-monument"></i> <?php echo $this->lang->line("auto reply campaign name") ?> <span class="red">*</span>
                            </label>

                            <input class="form-control" type="text" name="full_edit_auto_campaign_name" id="full_edit_auto_campaign_name" placeholder="<?php echo $this->lang->line("write your auto reply campaign name here") ?>">
                        </div>
                    </div>

                    <div class="col-12" id="full_edit_generic_message_div" style="display: none;">

                        <div class="form-group" style="border: 1px dashed #e4e6fc; padding: 10px;">
                            <label><i class="fa fa-envelope"></i>  <?php echo $this->lang->line("comment reply text") ?> 
                            <span class="red">*</span>
                            <a href="#" data-placement="bottom" data-toggle="popover" data-trigger="focus" title="<?php echo $this->lang->line("message") ?>" data-content="<?php echo $this->lang->line("write your message which you want to send. You can customize the message by individual commenter name."); ?>  Spintax example : {Hello|Howdy|Hola} to you, {Mr.|Mrs.|Ms.} {{Jason|Malina|Sara}|Williams|Davis}"><i class='fa fa-info-circle'></i> </a>
                        </label>

                        <span class='float-right'>
                            <a title="<?php echo $this->lang->line("You can tag user in your comment reply. Facebook will notify them about mention whenever you tag.") ?>" data-placement="top" data-toggle="tooltip"
                                class='btn btn-default btn-sm full_lead_tag_name button-outline'><i class='fa fa-tags'></i> <?php echo $this->lang->line("mention user") ?></a>
                            </span>

                            <span class='float-right'>
                                <a title="<?php echo $this->lang->line("You can include #LEAD_USER_NAME# variable inside your message. The variable will be replaced by real username when we will send it.") ?>" data-placement="top" data-toggle="tooltip" class='btn btn-default btn-sm full_lead_first_name button-outline'><i class='fa fa-user'></i> <?php echo $this->lang->line("Username") ?></a>
                            </span>

                            <div class="clearfix"></div>
                            <textarea class="form-control full_message" name="full_edit_generic_message" id="full_edit_generic_message" placeholder="<?php echo $this->lang->line("type your comment reply here...") ?>" style="height:170px !important;"></textarea>
                        </div>

                    </div>

                    <div class="col-12" id="full_edit_filter_message_div" style="display: none;">

                        <?php for ($i = 1; $i <= 20; $i++) : ?>

                            <div class="form-group" id="full_edit_filter_div_<?php echo $i; ?>" style="border: 1px dashed #e4e6fc; padding: 10px; margin-bottom: 50px;">

                                <label><i class="fa fa-tag"></i> <?php echo $this->lang->line("filter word/sentence") ?> 
                                <span class="red">*</span>
                                <a href="#" data-placement="bottom" data-toggle="popover" data-trigger="focus" title="<?php echo $this->lang->line("message") ?>" data-content="<?php echo $this->lang->line("Write the word or sentence for which you want to filter comment. For multiple filter keyword write comma separated. Example -   why, wanto to know, when") ?>"><i class='fa fa-info-circle'></i> </a>

                                </label>

                                <input class="form-control filter_word" type="text" name="full_edit_filter_word_<?php echo $i; ?>" id="full_edit_filter_word_<?php echo $i; ?>" placeholder="<?php echo $this->lang->line("write your filter word here") ?>">

                                <br/><br/>

                                <label><?php echo $this->lang->line("comment reply text") ?><span class="red">*</span>
                                    <a href="#" data-placement="bottom" data-toggle="popover" data-trigger="focus" title="<?php echo $this->lang->line("message") ?>" data-content="<?php echo $this->lang->line("write your message which you want to send based on filter words. You can customize the message by individual commenter name."); ?>  Spintax example : {Hello|Howdy|Hola} to you, {Mr.|Mrs.|Ms.} {{Jason|Malina|Sara}|Williams|Davis}"><i class='fa fa-info-circle'></i> </a>
                                </label>

                                <span class='float-right'>
                                    <a title="<?php echo $this->lang->line("You can tag user in your comment reply. Facebook will notify them about mention whenever you tag.") ?>"data-placement="top" data-toggle="tooltip" class='btn btn-default btn-sm full_lead_tag_name button-outline'><i class='fa fa-tags'></i> <?php echo $this->lang->line("mention user") ?></a>
                                </span>

                                <span class='float-right'>
                                    <a title="<?php echo $this->lang->line("You can include #LEAD_USER_NAME# variable inside your message. The variable will be replaced by real username when we will send it.") ?>" data-placement="top" data-toggle="tooltip" class='btn btn-default btn-sm full_lead_first_name button-outline'><i class='fa fa-user'></i> <?php echo $this->lang->line("Username") ?></a>
                                </span>
                                <div class="clearfix"></div>
                                <textarea class="form-control full_message" name="full_edit_comment_reply_msg_<?php echo $i; ?>" id="full_edit_comment_reply_msg_<?php echo $i; ?>" placeholder="<?php echo $this->lang->line("type your comment reply here...") ?>" style="height:170px !important;"></textarea>
                            </div>
                        <?php endfor; ?>

                        <br/>

                        <div class="clearfix">
                            <input type="hidden" name="full_edit_content_counter" id="full_edit_content_counter"/>
                            <button type="button" class="btn btn-sm btn-outline-primary float-right" id="full_edit_add_more_button"><i class="fa fa-plus"></i> <?php echo $this->lang->line("add more filtering") ?></button>
                        </div>


                        <div class="form-group" id="nofilter_word_found_div" style="margin-top: 10px; border: 1px dashed #e4e6fc; padding: 10px;">
                            <label><i class="fa fa-envelope"></i> <?php echo $this->lang->line("comment reply if no matching found") ?>
                            <a href="#" data-placement="bottom" data-toggle="popover" data-trigger="focus" title="<?php echo $this->lang->line("message") ?>" data-content="<?php echo $this->lang->line("Write the message,  if no filter word found. If you don't want to send message them, just keep it blank ."); ?>  Spintax example : {Hello|Howdy|Hola} to you, {Mr.|Mrs.|Ms.} {{Jason|Malina|Sara}|Williams|Davis}"><i class='fa fa-info-circle'></i> </a>
                            </label>
                            <span class='float-right'>
                                <a title="<?php echo $this->lang->line("You can tag user in your comment reply. Facebook will notify them about mention whenever you tag.") ?>" data-placement="top" data-toggle="tooltip"
                                class='btn btn-default btn-sm full_lead_tag_name button-outline'><i class='fa fa-tags'></i> <?php echo $this->lang->line("mention user") ?></a>
                            </span>

                            <span class='float-right'>
                                <a title="<?php echo $this->lang->line("You can include #LEAD_USER_NAME# variable inside your message. The variable will be replaced by real username when we will send it.") ?>" data-placement="top" data-toggle="tooltip" class='btn btn-default btn-sm full_lead_first_name button-outline'><i class='fa fa-user'></i> <?php echo $this->lang->line("Username") ?></a>
                            </span>

                            <div class="clearfix"></div>

                            <textarea class="form-control full_message" name="full_edit_nofilter_word_found_text" id="full_edit_nofilter_word_found_text" placeholder="<?php echo $this->lang->line("type your comment reply here...") ?>" style="height:170px !important;"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            </form>
            <div class="modal-footer bg-whitesmoke" style="padding-left: 45px; padding-right: 45px; ">
                <div class="row">
                    <div class="col-6">
                        <button class="btn btn-lg btn-primary float-left" id="full_edit_save_button"><i class='fas fa-edit'></i> <?php echo $this->lang->line("Update") ?></button>
                    </div>

                    <div class="col-6">
                        <button class="btn btn-lg btn-secondary float-right" id="full_edit_modal_close"><i class='fas fa-times'></i> <?php echo $this->lang->line("cancel") ?></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="modal fade" id="mentions_auto_reply_message_modal" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-lg" style="min-width: 70%;max-width: 70%">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" style="padding: 10px 20px 10px 20px;" ><?php echo $this->lang->line("Please give the following information for mentions account reply") ?></h5>
                <button type="button" id='mentions_modal_close' class="close">&times;</button>

            </div>

            <form action="#" id="mentions_auto_reply_info_form" method="post">
                <input type="hidden" name="mentions_auto_reply_page_id" id="mentions_auto_reply_page_id" value="">
                <div class="modal-body" id="mentions_auto_reply_message_modal_body">
                    <!-- comment hide and delete section -->
                    <div class="row hidden" style="padding: 10px 20px 10px 20px; <?php if (!$commnet_hide_delete_addon) echo "display: none;"; ?> ">
                        <div class="col-12" style="margin-bottom: 20px;">
                        	<div class="row">									
                        		<div class="col-12 col-md-6">
                        			<label><i class="fa fa-ban"></i> <?php echo $this->lang->line("what do you want about offensive comments?") ?></label>
                        		</div>
                        		<div class="col-12 col-md-6">
                        			<div class="row">
                        			  <div class="col-12 col-md-6">
                        				<label class="custom-switch">
                        				  <input type="radio" name="mentions_delete_offensive_comment" value="hide" id="mentions_delete_offensive_comment_hide" class="custom-switch-input" checked>
                        				  <span class="custom-switch-indicator"></span>
                        				  <span class="custom-switch-description"><?php echo $this->lang->line('hide'); ?></span>
                        				</label>
                        			  </div>
                        			  <div class="col-12 col-md-6">
                        				<label class="custom-switch">
                        				  <input type="radio" name="mentions_delete_offensive_comment" value="delete" id="mentions_delete_offensive_comment_delete" class="custom-switch-input">
                        				  <span class="custom-switch-indicator"></span>
                        				  <span class="custom-switch-description"><?php echo $this->lang->line('delete'); ?>
                        				</label>
                        			  </div>
                        			</div>
                        		</div>
                        	</div>
                        </div>

                        <br/><br/>

                        <div class="col-12 col-md-12" id="mentions_delete_offensive_comment_keyword_div">
                            <div class="form-group" style="border: 1px dashed #e4e6fc;padding: 10px;">
                                <label><i class="fa fa-tag"></i> <?php echo $this->lang->line("write down the offensive keywords in comma separated") ?>
                                </label>
                                <textarea class="form-control mentions_message" name="mentions_delete_offensive_comment_keyword" id="mentions_delete_offensive_comment_keyword" placeholder="<?php echo $this->lang->line("Type keywords here in comma separated (keyword1,keyword2)...Keep it blank for no actions") ?>" style="height:70px !important;"></textarea>
                            </div>
                        </div>
                    </div>

                    <!-- end of comment hide and delete section -->


                    <div class="row" style="padding: 10px 20px 10px 20px;">

                        <div class="col-12">
                        	<div class="row">									
                        		<div class="col-12 col-md-6"><label><i class="fa fa-sort-numeric-down"></i> <?php echo $this->lang->line("Do you want to reply comments of a user multiple times?") ?></label></div>
                        		<div class="col-12 col-md-6">
                        		  <div class="form-group">
                        			<label class="custom-switch">
                        			  <input type="checkbox" name="mentions_multiple_reply" value="yes" id="mentions_multiple_reply" class="custom-switch-input">
                        			  <span class="custom-switch-indicator"></span>
                        			  <span class="custom-switch-description"><?php echo $this->lang->line('Yes');?></span>
                        			</label>
                        		  </div>
                        		</div>
                        	</div>
                        </div>

                        <div class="smallspace clearfix"></div>

                        <!-- comment hide and delete section -->

                        <div class="col-12" <?php if (!$commnet_hide_delete_addon) echo "style='display: none;'"; ?>>

                            <div class="row">									
                            	<div class="col-12 col-md-6"><label><i class="fa fa-eye-slash"></i> <?php echo $this->lang->line("do you want to hide comments after comment reply?") ?></label></div>
                            	<div class="col-12 col-md-6">
                            	  <div class="form-group">
                            		<label class="custom-switch">
                            		  <input type="checkbox" name="mentions_hide_comment_after_comment_reply" value="yes" id="mentions_hide_comment_after_comment_reply" class="custom-switch-input">
                            		  <span class="custom-switch-indicator"></span>
                            		  <span class="custom-switch-description"><?php echo $this->lang->line('Yes');?></span>
                            		</label>
                            	  </div>
                            	</div>
                            </div>

                        </div>

                        <!-- comment hide and delete section -->


                        <br/><br/>

                        <div class="col-12">
                          <div class="custom-control custom-radio">
                        	<input type="radio" name="mentions_message_type" value="generic" id="mentions_generic" class="custom-control-input radio_button">
                        	<label class="custom-control-label" for="mentions_generic"><?php echo $this->lang->line("generic comment reply for all") ?></label>
                          </div>
                          <div class="custom-control custom-radio">
                        	<input type="radio" name="mentions_message_type" value="filter" id="mentions_filter" class="custom-control-input radio_button">
                        	<label class="custom-control-label" for="mentions_filter"><?php echo $this->lang->line("send comment reply by filtering word/sentence") ?></label>
                          </div>
                        </div>

                        <div class="col-12" style="margin-top: 15px;">

                            <div class="form-group">
                                <label><i class="fa fa-monument"></i> <?php echo $this->lang->line("auto reply campaign name") ?> <span class="red">*</span>
                                </label>

                                <input class="form-control" type="text" name="mentions_auto_campaign_name" id="mentions_auto_campaign_name" placeholder="<?php echo $this->lang->line("write your auto reply campaign name here") ?>">
                            </div>
                        </div>

                        <div class="col-12" id="mentions_generic_message_div" style="display: none;">

                            <div class="form-group" style="border: 1px dashed #e4e6fc; padding: 10px;">
                                <label><i class="fa fa-envelope"></i>  <?php echo $this->lang->line("comment reply text") ?> 
                                	<span class="red">*</span>
                                    <a href="#" data-placement="bottom" data-toggle="popover" data-trigger="focus" title="<?php echo $this->lang->line("message") ?>" data-content="<?php echo $this->lang->line("write your message which you want to send. You can customize the message by individual commenter name."); ?>  Spintax example : {Hello|Howdy|Hola} to you, {Mr.|Mrs.|Ms.} {{Jason|Malina|Sara}|Williams|Davis}"><i class='fa fa-info-circle'></i> </a>
                                </label>

                                <span class='float-right'>
                                	<a title="<?php echo $this->lang->line("You can tag user in your comment reply. Facebook will notify them about mention whenever you tag.") ?>" data-placement="top" data-toggle="tooltip"
                                   class='btn btn-default btn-sm mentions_lead_tag_name button-outline'><i class='fa fa-tags'></i> <?php echo $this->lang->line("mention user") ?></a>
                            	</span>

                                <span class='float-right'>
                                	<a title="<?php echo $this->lang->line("You can include #LEAD_USER_NAME# variable inside your message. The variable will be replaced by real username when we will send it.") ?>" data-placement="top" data-toggle="tooltip" class='btn btn-default btn-sm mentions_lead_first_name button-outline'><i class='fa fa-user'></i> <?php echo $this->lang->line("Username") ?></a>
                            	</span>

                              	<div class="clearfix"></div>
                                	<textarea class="form-control mentions_message" name="mentions_generic_message" id="mentions_generic_message" placeholder="<?php echo $this->lang->line("type your comment reply here...") ?>" style="height:170px !important;"></textarea>
                        	</div>
                        </div>

                        <div class="col-12" id="mentions_filter_message_div" style="display: none;">

                            <?php for ($i = 1; $i <= 20; $i++) : ?>

                                <div class="form-group" id="mentions_filter_div_<?php echo $i; ?>" style="border: 1px dashed #e4e6fc; padding: 10px; margin-bottom: 50px;">

                                    <label><i class="fa fa-tag"></i> <?php echo $this->lang->line("filter word/sentence") ?> 
                                    <span class="red">*</span>
                                    <a href="#" data-placement="bottom" data-toggle="popover" data-trigger="focus" title="<?php echo $this->lang->line("message") ?>" data-content="<?php echo $this->lang->line("Write the word or sentence for which you want to filter comment. For multiple filter keyword write comma separated. Example -   why, wanto to know, when") ?>"><i class='fa fa-info-circle'></i> </a>

                                    </label>

                                    <input class="form-control filter_word" type="text" name="mentions_filter_word_<?php echo $i; ?>" id="mentions_filter_word_<?php echo $i; ?>" placeholder="<?php echo $this->lang->line("write your filter word here") ?>">

                                    <br/>

                                    <br/>

                                    <label><?php echo $this->lang->line("comment reply text") ?><span class="red">*</span>
                                        <a href="#" data-placement="bottom" data-toggle="popover" data-trigger="focus" title="<?php echo $this->lang->line("message") ?>" data-content="<?php echo $this->lang->line("write your message which you want to send based on filter words. You can customize the message by individual commenter name."); ?>  Spintax example : {Hello|Howdy|Hola} to you, {Mr.|Mrs.|Ms.} {{Jason|Malina|Sara}|Williams|Davis}"><i class='fa fa-info-circle'></i> </a>
                                    </label>

                                    <span class='float-right'>
                                        <a title="<?php echo $this->lang->line("You can tag user in your comment reply. Facebook will notify them about mention whenever you tag.") ?>"data-placement="top" data-toggle="tooltip" class='btn btn-default btn-sm mentions_lead_tag_name button-outline'><i class='fa fa-tags'></i> <?php echo $this->lang->line("mention user") ?></a>
                                    </span>

                                    <span class='float-right'>
                                        <a title="<?php echo $this->lang->line("You can include #LEAD_USER_NAME# variable inside your message. The variable will be replaced by real username when we will send it.") ?>" data-placement="top" data-toggle="tooltip" class='btn btn-default btn-sm mentions_lead_first_name button-outline'><i class='fa fa-user'></i> <?php echo $this->lang->line("Username") ?></a>
                                    </span>
                                      <div class="clearfix"></div>
                                    <textarea class="form-control mentions_message" name="mentions_comment_reply_msg_<?php echo $i; ?>" id="mentions_comment_reply_msg_<?php echo $i; ?>" placeholder="<?php echo $this->lang->line("type your comment reply here...") ?>" style="height:170px !important;"></textarea>
                                </div>
                            <?php endfor; ?>

                            <br/>

                            <div class="clearfix">
                                <input type="hidden" name="mentions_content_counter" id="mentions_content_counter"/>
                                <button type="button" class="btn btn-sm btn-outline-primary float-right" id="mentions_add_more_button"><i class="fa fa-plus"></i> <?php echo $this->lang->line("add more filtering") ?></button>
                            </div>


                            <div class="form-group" id="nofilter_word_found_div" style="margin-top: 10px; border: 1px dashed #e4e6fc; padding: 10px;">
                                <label><i class="fa fa-envelope"></i> <?php echo $this->lang->line("comment reply if no matching found") ?>
                                    <a href="#" data-placement="bottom" data-toggle="popover" data-trigger="focus" title="<?php echo $this->lang->line("message") ?>" data-content="<?php echo $this->lang->line("Write the message,  if no filter word found. If you don't want to send message them, just keep it blank ."); ?>  Spintax example : {Hello|Howdy|Hola} to you, {Mr.|Mrs.|Ms.} {{Jason|Malina|Sara}|Williams|Davis}"><i class='fa fa-info-circle'></i> </a>
                                </label>
                                <span class='float-right'>
                                	<a title="<?php echo $this->lang->line("You can tag user in your comment reply. Facebook will notify them about mention whenever you tag.") ?>" data-placement="top" data-toggle="tooltip"
                                   class='btn btn-default btn-sm mentions_lead_tag_name button-outline'><i class='fa fa-tags'></i> <?php echo $this->lang->line("mention user") ?></a>
                            	</span>

	                            <span class='float-right'>
	                            	<a title="<?php echo $this->lang->line("You can include #LEAD_USER_NAME# variable inside your message. The variable will be replaced by real username when we will send it.") ?>" data-placement="top" data-toggle="tooltip" class='btn btn-default btn-sm mentions_lead_first_name button-outline'><i class='fa fa-user'></i> <?php echo $this->lang->line("Username") ?></a>
	                            </span>

                                <div class="clearfix"></div>

                                <textarea class="form-control mentions_message" name="mentions_nofilter_word_found_text" id="mentions_nofilter_word_found_text" placeholder="<?php echo $this->lang->line("type your comment reply here...") ?>" style="height:170px !important;"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <div class="clearfix"></div>
            <div class="modal-footer bg-whitesmoke" style="padding-left: 45px; padding-right: 45px; ">
                <div class="row">
                    <div class="col-6">
                        <button class="btn btn-lg btn-primary float-left" id="mentions_save_button"><i class='fas fa-save'></i> <?php echo $this->lang->line("Submit") ?></button>
                    </div>

                    <div class="col-6">
                        <button class="btn btn-lg btn-secondary float-right" id="mentions_modal_close"><i class='fas fa-times'></i> <?php echo $this->lang->line("cancel") ?></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="mentions_edit_auto_reply_message_modal" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-lg" style="min-width: 70%;max-width: 70%">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" style="padding: 10px 20px 10px 20px;" ><?php echo $this->lang->line("please give the following information for Edit mentions Account Reply") ?></h5>
                <button type="button" id='mentions_edit_modal_close' class="close">&times;</button>
            </div>

            <form action="#" id="mentions_edit_auto_reply_info_form" method="post">
                <input type="hidden" name="mentions_edit_auto_reply_page_id" id="mentions_edit_auto_reply_page_id" value="">
                <input type="hidden" name="mentions_autoreply_table_id" id="mentions_autoreply_table_id" value="">
                <div class="modal-body" id="mentions_auto_reply_message_modal_body">

                    <div class="text-center waiting previewLoader">
                        <i class="fas fa-spinner fa-spin blue text-center" style="font-size: 40px;margin-bottom: 40px;"></i>
                    </div>

                    <div class="row hidden" style="padding: 10px 20px 10px 20px; <?php if (!$commnet_hide_delete_addon) echo "display: none;"; ?> ">
                        <div class="col-12" style="margin-bottom: 20px;">
                            <div class="row">                                   
                                <div class="col-12 col-md-6">
                                    <label><i class="fa fa-ban"></i> <?php echo $this->lang->line("what do you want about offensive comments?") ?></label>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <label class="custom-switch">
                                                <input type="radio" name="mentions_delete_offensive_comment" value="hide" id="mentions_edit_delete_offensive_comment_hide" class="custom-switch-input" checked>
                                                <span class="custom-switch-indicator"></span>
                                                <span class="custom-switch-description"><?php echo $this->lang->line('hide'); ?></span>
                                            </label>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <label class="custom-switch">
                                                <input type="radio" name="mentions_delete_offensive_comment" value="delete" id="mentions_edit_delete_offensive_comment_delete" class="custom-switch-input">
                                                <span class="custom-switch-indicator"></span>
                                                <span class="custom-switch-description"><?php echo $this->lang->line('delete'); ?>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <br/><br/>

                        <div class="col-12 col-md-12" id="mentions_delete_offensive_comment_keyword_div">
                            <div class="form-group" style="border: 1px dashed #e4e6fc;padding: 10px;">
                                <label><i class="fa fa-tag"></i> <?php echo $this->lang->line("write down the offensive keywords in comma separated") ?>
                                </label>
                                <textarea class="form-control mentions_message" name="mentions_edit_delete_offensive_comment_keyword" id="mentions_edit_delete_offensive_comment_keyword" placeholder="<?php echo $this->lang->line("Type keywords here in comma separated (keyword1,keyword2)...Keep it blank for no actions") ?>" style="height:70px !important;"></textarea>
                            </div>
                        </div>
                    </div>


                <div class="row" style="padding: 10px 20px 10px 20px;">

                    <div class="col-12">
                        <div class="row">                                   
                            <div class="col-12 col-md-6"><label><i class="fa fa-sort-numeric-down"></i> <?php echo $this->lang->line("Do you want to reply comments of a user multiple times?") ?></label></div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label class="custom-switch">
                                        <input type="checkbox" name="mentions_edit_multiple_reply" value="yes" id="mentions_edit_multiple_reply" class="custom-switch-input">
                                        <span class="custom-switch-indicator"></span>
                                        <span class="custom-switch-description"><?php echo $this->lang->line('Yes');?></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12" <?php if (!$commnet_hide_delete_addon) echo "style='display: none;'"; ?>>

                        <div class="row">                                   
                            <div class="col-12 col-md-6"><label><i class="fa fa-eye-slash"></i> <?php echo $this->lang->line("do you want to hide comments after comment reply?") ?></label></div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label class="custom-switch">
                                        <input type="checkbox" name="mentions_edit_hide_comment_after_comment_reply" value="yes" id="mentions_edit_hide_comment_after_comment_reply" class="custom-switch-input">
                                        <span class="custom-switch-indicator"></span>
                                        <span class="custom-switch-description"><?php echo $this->lang->line('Yes');?></span>
                                    </label>
                                </div>
                            </div>
                        </div>

                    </div>


                    <br/><br/>

                    <div class="col-12">
                        <div class="custom-control custom-radio">
                            <input type="radio" name="mentions_edit_message_type" value="generic" id="mentions_edit_generic" class="custom-control-input radio_button">
                            <label class="custom-control-label" for="mentions_edit_generic"><?php echo $this->lang->line("generic comment reply for all") ?></label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" name="mentions_edit_message_type" value="filter" id="mentions_edit_filter" class="custom-control-input radio_button">
                            <label class="custom-control-label" for="mentions_edit_filter"><?php echo $this->lang->line("send comment reply by filtering word/sentence") ?></label>
                        </div>
                    </div>

                    <div class="col-12" style="margin-top: 15px;">

                        <div class="form-group">
                            <label><i class="fa fa-monument"></i> <?php echo $this->lang->line("auto reply campaign name") ?> <span class="red">*</span>
                            </label>

                            <input class="form-control" type="text" name="mentions_edit_auto_campaign_name" id="mentions_edit_auto_campaign_name" placeholder="<?php echo $this->lang->line("write your auto reply campaign name here") ?>">
                        </div>
                    </div>

                    <div class="col-12" id="mentions_edit_generic_message_div" style="display: none;">

                        <div class="form-group" style="border: 1px dashed #e4e6fc; padding: 10px;">
                            <label><i class="fa fa-envelope"></i>  <?php echo $this->lang->line("comment reply text") ?> 
                            <span class="red">*</span>
                            <a href="#" data-placement="bottom" data-toggle="popover" data-trigger="focus" title="<?php echo $this->lang->line("message") ?>" data-content="<?php echo $this->lang->line("write your message which you want to send. You can customize the message by individual commenter name."); ?>  Spintax example : {Hello|Howdy|Hola} to you, {Mr.|Mrs.|Ms.} {{Jason|Malina|Sara}|Williams|Davis}"><i class='fa fa-info-circle'></i> </a>
                        </label>

                        <span class='float-right'>
                            <a title="<?php echo $this->lang->line("You can tag user in your comment reply. Facebook will notify them about mention whenever you tag.") ?>" data-placement="top" data-toggle="tooltip"
                                class='btn btn-default btn-sm mentions_lead_tag_name button-outline'><i class='fa fa-tags'></i> <?php echo $this->lang->line("mention user") ?></a>
                            </span>

                            <span class='float-right'>
                                <a title="<?php echo $this->lang->line("You can include #LEAD_USER_NAME# variable inside your message. The variable will be replaced by real username when we will send it.") ?>" data-placement="top" data-toggle="tooltip" class='btn btn-default btn-sm mentions_lead_first_name button-outline'><i class='fa fa-user'></i> <?php echo $this->lang->line("Username") ?></a>
                            </span>

                            <div class="clearfix"></div>
                            <textarea class="form-control mentions_message" name="mentions_edit_generic_message" id="mentions_edit_generic_message" placeholder="<?php echo $this->lang->line("type your comment reply here...") ?>" style="height:170px !important;"></textarea>
                        </div>

                    </div>

                    <div class="col-12" id="mentions_edit_filter_message_div" style="display: none;">

                        <?php for ($i = 1; $i <= 20; $i++) : ?>

                            <div class="form-group" id="mentions_edit_filter_div_<?php echo $i; ?>" style="border: 1px dashed #e4e6fc; padding: 10px; margin-bottom: 50px;">

                                <label><i class="fa fa-tag"></i> <?php echo $this->lang->line("filter word/sentence") ?> 
                                <span class="red">*</span>
                                <a href="#" data-placement="bottom" data-toggle="popover" data-trigger="focus" title="<?php echo $this->lang->line("message") ?>" data-content="<?php echo $this->lang->line("Write the word or sentence for which you want to filter comment. For multiple filter keyword write comma separated. Example -   why, wanto to know, when") ?>"><i class='fa fa-info-circle'></i> </a>

                                </label>

                                <input class="form-control filter_word" type="text" name="mentions_edit_filter_word_<?php echo $i; ?>" id="mentions_edit_filter_word_<?php echo $i; ?>" placeholder="<?php echo $this->lang->line("write your filter word here") ?>">

                                <br/><br/>

                                <label><?php echo $this->lang->line("comment reply text") ?><span class="red">*</span>
                                    <a href="#" data-placement="bottom" data-toggle="popover" data-trigger="focus" title="<?php echo $this->lang->line("message") ?>" data-content="<?php echo $this->lang->line("write your message which you want to send based on filter words. You can customize the message by individual commenter name."); ?>  Spintax example : {Hello|Howdy|Hola} to you, {Mr.|Mrs.|Ms.} {{Jason|Malina|Sara}|Williams|Davis}"><i class='fa fa-info-circle'></i> </a>
                                </label>

                                <span class='float-right'>
                                    <a title="<?php echo $this->lang->line("You can tag user in your comment reply. Facebook will notify them about mention whenever you tag.") ?>"data-placement="top" data-toggle="tooltip" class='btn btn-default btn-sm mentions_lead_tag_name button-outline'><i class='fa fa-tags'></i> <?php echo $this->lang->line("mention user") ?></a>
                                </span>

                                <span class='float-right'>
                                    <a title="<?php echo $this->lang->line("You can include #LEAD_USER_NAME# variable inside your message. The variable will be replaced by real username when we will send it.") ?>" data-placement="top" data-toggle="tooltip" class='btn btn-default btn-sm mentions_lead_first_name button-outline'><i class='fa fa-user'></i> <?php echo $this->lang->line("Username") ?></a>
                                </span>
                                <div class="clearfix"></div>
                                <textarea class="form-control mentions_message" name="mentions_edit_comment_reply_msg_<?php echo $i; ?>" id="mentions_edit_comment_reply_msg_<?php echo $i; ?>" placeholder="<?php echo $this->lang->line("type your comment reply here...") ?>" style="height:170px !important;"></textarea>
                            </div>
                        <?php endfor; ?>

                        <br/>

                        <div class="clearfix">
                            <input type="hidden" name="mentions_edit_content_counter" id="mentions_edit_content_counter"/>
                            <button type="button" class="btn btn-sm btn-outline-primary float-right" id="mentions_edit_add_more_button"><i class="fa fa-plus"></i> <?php echo $this->lang->line("add more filtering") ?></button>
                        </div>


                        <div class="form-group" id="nofilter_word_found_div" style="margin-top: 10px; border: 1px dashed #e4e6fc; padding: 10px;">
                            <label><i class="fa fa-envelope"></i> <?php echo $this->lang->line("comment reply if no matching found") ?>
                            <a href="#" data-placement="bottom" data-toggle="popover" data-trigger="focus" title="<?php echo $this->lang->line("message") ?>" data-content="<?php echo $this->lang->line("Write the message,  if no filter word found. If you don't want to send message them, just keep it blank ."); ?>  Spintax example : {Hello|Howdy|Hola} to you, {Mr.|Mrs.|Ms.} {{Jason|Malina|Sara}|Williams|Davis}"><i class='fa fa-info-circle'></i> </a>
                            </label>
                            <span class='float-right'>
                                <a title="<?php echo $this->lang->line("You can tag user in your comment reply. Facebook will notify them about mention whenever you tag.") ?>" data-placement="top" data-toggle="tooltip"
                                class='btn btn-default btn-sm mentions_lead_tag_name button-outline'><i class='fa fa-tags'></i> <?php echo $this->lang->line("mention user") ?></a>
                            </span>

                            <span class='float-right'>
                                <a title="<?php echo $this->lang->line("You can include #LEAD_USER_NAME# variable inside your message. The variable will be replaced by real username when we will send it.") ?>" data-placement="top" data-toggle="tooltip" class='btn btn-default btn-sm mentions_lead_first_name button-outline'><i class='fa fa-user'></i> <?php echo $this->lang->line("Username") ?></a>
                            </span>

                            <div class="clearfix"></div>

                            <textarea class="form-control mentions_message" name="mentions_edit_nofilter_word_found_text" id="mentions_edit_nofilter_word_found_text" placeholder="<?php echo $this->lang->line("type your comment reply here...") ?>" style="height:170px !important;"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            </form>
            <div class="modal-footer bg-whitesmoke" style="padding-left: 45px; padding-right: 45px; ">
                <div class="row">
                    <div class="col-6">
                        <button class="btn btn-lg btn-primary float-left" id="mentions_edit_save_button"><i class='fas fa-edit'></i> <?php echo $this->lang->line("Update") ?></button>
                    </div>

                    <div class="col-6">
                        <button class="btn btn-lg btn-secondary float-right" id="mentions_edit_modal_close"><i class='fas fa-times'></i> <?php echo $this->lang->line("cancel") ?></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
