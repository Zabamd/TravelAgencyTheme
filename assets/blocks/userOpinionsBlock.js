import { registerBlockType } from "@wordpress/blocks";
import { QueryControls } from "@wordpress/components";
import { __ } from "@wordpress/i18n";
import "./style/userOpinionsBlock.css";

registerBlockType("t-par-agency/user-opinions", {
  title: __("User Opinions"),
  category: "t-par-agency",
  icon: 'embed-post',
  edit: EditBlock,
  save: SaveBlock,
});



function EditBlock(params) {
  console.log(params);
}

function SaveBlock(params) {
  console.log(params);
}
