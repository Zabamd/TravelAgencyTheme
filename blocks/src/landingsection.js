import { __ } from "@wordpress/i18n";
import "./landingsection.css";

wp.blocks.registerBlockType("travelagency/landingsection", {
  title: __("Landing Section"),
  /*   description: __("Landing Section with Image "), */
  edit: editorBlock,
  save: savedBlock,
});

function editorBlock() {
  return (
    <React.Component>
      <h2>Landing section Block</h2>
    </React.Component>
  );
}

function savedBlock() {
  return (
    <React.Component>
      <h2>Landing section Block Saved</h2>
    </React.Component>
  );
}
