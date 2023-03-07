<?php
namespace zabamd\TravelAgencyTheme\blocks;

class Block
{
    private string $blockName;

    public function __construct(string $blockName)
    {
        $this->blockName = $blockName;
        add_action("init", [$this, "initBlock"]);
    }

    public function initBlock(): void
    {
        $this->registerBlock();
        $this->registerStyle();
    }

    private function registerStyle(): void
    {
        wp_enqueue_style(
            $this->blockName . "_style",
            get_theme_file_uri("/blocks/build/" . $this->blockName . ".css")
        );
        add_editor_style([
            get_theme_file_uri("/blocks/build/" . $this->blockName . ".css"),
        ]);
    }

    private function registerBlock(): void
    {
        wp_enqueue_script(
            $this->blockName . "_block_script",
            get_theme_file_uri("/blocks/build/" . $this->blockName . ".js", [
                "wp-blocks",
                "wp-editor",
            ])
        );
        register_block_type("travel_agency/" . $this->blockName, [
            "editor_script" => $this->blockName . "_block_script",
        ]);
    }
}

?>
