import{ReactiveElement as t}from"@lit/reactive-element";export*from"@lit/reactive-element";import{render as e,noChange as i}from"lit-html";export*from"lit-html";
/**
 * @license
 * Copyright 2017 Google LLC
 * SPDX-License-Identifier: BSD-3-Clause
 */class s extends t{constructor(){super(...arguments),this.renderOptions={host:this},this._$Do=void 0}createRenderRoot(){const t=super.createRenderRoot();return this.renderOptions.renderBefore??=t.firstChild,t}update(t){const i=this.render();this.hasUpdated||(this.renderOptions.isConnected=this.isConnected),super.update(t),this._$Do=e(i,this.renderRoot,this.renderOptions)}connectedCallback(){super.connectedCallback(),this._$Do?.setConnected(!0)}disconnectedCallback(){super.disconnectedCallback(),this._$Do?.setConnected(!1)}render(){return i}}s._$litElement$=!0,s[("finalized","finalized")]=!0,globalThis.litElementHydrateSupport?.({LitElement:s});const r=globalThis.litElementPolyfillSupport;r?.({LitElement:s});const o={_$AK:(t,e,i)=>{t._$AK(e,i)},_$AL:t=>t._$AL};(globalThis.litElementVersions??=[]).push("4.0.1");export{s as LitElement,o as _$LE};
