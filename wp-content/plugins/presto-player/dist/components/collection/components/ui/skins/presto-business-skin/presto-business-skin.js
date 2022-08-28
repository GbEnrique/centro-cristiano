import { Component, Host, h } from '@stencil/core';
export class PrestoBusinessSkin {
  render() {
    return (h(Host, null,
      h("slot", null)));
  }
  static get is() { return "presto-business-skin"; }
  static get originalStyleUrls() { return {
    "$": ["presto-business-skin.scss"]
  }; }
  static get styleUrls() { return {
    "$": ["presto-business-skin.css"]
  }; }
}
