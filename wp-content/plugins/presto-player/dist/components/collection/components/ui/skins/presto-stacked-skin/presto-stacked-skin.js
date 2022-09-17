import { Component, Host, h } from '@stencil/core';
export class PrestoStackedSkin {
  render() {
    return (h(Host, null,
      h("slot", null)));
  }
  static get is() { return "presto-stacked-skin"; }
  static get originalStyleUrls() { return {
    "$": ["presto-stacked-skin.scss"]
  }; }
  static get styleUrls() { return {
    "$": ["presto-stacked-skin.css"]
  }; }
}
