---
name: Rural Contemporary
colors:
  surface: '#fcf8ff'
  surface-dim: '#dad7f3'
  surface-bright: '#fcf8ff'
  surface-container-lowest: '#ffffff'
  surface-container-low: '#f5f2ff'
  surface-container: '#efecff'
  surface-container-high: '#e8e5ff'
  surface-container-highest: '#e2e0fc'
  on-surface: '#1a1a2e'
  on-surface-variant: '#404943'
  inverse-surface: '#2f2e43'
  inverse-on-surface: '#f2efff'
  outline: '#707973'
  outline-variant: '#bfc9c1'
  surface-tint: '#2c694e'
  primary: '#0f5238'
  on-primary: '#ffffff'
  primary-container: '#2d6a4f'
  on-primary-container: '#a8e7c5'
  inverse-primary: '#95d4b3'
  secondary: '#805437'
  on-secondary: '#ffffff'
  secondary-container: '#fec29e'
  on-secondary-container: '#794e31'
  tertiary: '#713638'
  on-tertiary: '#ffffff'
  tertiary-container: '#8d4d4e'
  on-tertiary-container: '#ffcfce'
  error: '#ba1a1a'
  on-error: '#ffffff'
  error-container: '#ffdad6'
  on-error-container: '#93000a'
  primary-fixed: '#b1f0ce'
  primary-fixed-dim: '#95d4b3'
  on-primary-fixed: '#002114'
  on-primary-fixed-variant: '#0e5138'
  secondary-fixed: '#ffdbc7'
  secondary-fixed-dim: '#f4ba96'
  on-secondary-fixed: '#311300'
  on-secondary-fixed-variant: '#653d22'
  tertiary-fixed: '#ffdad9'
  tertiary-fixed-dim: '#ffb3b3'
  on-tertiary-fixed: '#390b0e'
  on-tertiary-fixed-variant: '#6f3537'
  background: '#fcf8ff'
  on-background: '#1a1a2e'
  surface-variant: '#e2e0fc'
typography:
  display-lg:
    fontFamily: Playfair Display
    fontSize: 64px
    fontWeight: '700'
    lineHeight: 72px
    letterSpacing: -0.02em
  display-lg-mobile:
    fontFamily: Playfair Display
    fontSize: 40px
    fontWeight: '700'
    lineHeight: 48px
    letterSpacing: -0.01em
  headline-lg:
    fontFamily: Playfair Display
    fontSize: 48px
    fontWeight: '600'
    lineHeight: 56px
  headline-md:
    fontFamily: Playfair Display
    fontSize: 32px
    fontWeight: '600'
    lineHeight: 40px
  headline-sm:
    fontFamily: Playfair Display
    fontSize: 24px
    fontWeight: '600'
    lineHeight: 32px
  body-lg:
    fontFamily: Plus Jakarta Sans
    fontSize: 18px
    fontWeight: '400'
    lineHeight: 28px
  body-md:
    fontFamily: Plus Jakarta Sans
    fontSize: 16px
    fontWeight: '400'
    lineHeight: 24px
  label-md:
    fontFamily: Plus Jakarta Sans
    fontSize: 14px
    fontWeight: '600'
    lineHeight: 20px
    letterSpacing: 0.05em
  caption:
    fontFamily: Plus Jakarta Sans
    fontSize: 12px
    fontWeight: '400'
    lineHeight: 16px
rounded:
  sm: 0.125rem
  DEFAULT: 0.25rem
  md: 0.375rem
  lg: 0.5rem
  xl: 0.75rem
  full: 9999px
spacing:
  unit: 8px
  container-max: 1280px
  gutter: 24px
  margin-desktop: 64px
  margin-mobile: 20px
  section-gap-lg: 120px
  section-gap-md: 80px
---

## Brand & Style
The design system for Desa Plosogede is built upon a "Rural Contemporary" aesthetic. It balances the warmth of Central Javanese hospitality with a premium editorial lens, positioning the village as a destination of cultural significance and natural beauty. The target audience includes eco-conscious travelers, cultural researchers, and regional stakeholders.

The style is characterized by **High-Fidelity Minimalism**:
- **Photo-First:** High-quality imagery of the Menoreh hills and village life takes precedence over decorative UI elements.
- **Editorial Sophistication:** Layouts mimic high-end travel journals, utilizing generous whitespace to allow content to breathe.
- **Warm Trustworthiness:** A palette rooted in the earth creates an immediate sense of belonging and reliability.
- **Subtle Structure:** Modern, thin dividers and purposeful alignment replace heavy borders, maintaining an airy, sophisticated atmosphere.

## Colors
The palette is a direct reflection of the Plosogede landscape:
- **Menoreh Green (Primary):** Inspired by the lush canopy and rice fields; used for key actions and brand presence.
- **Earth Tone Brown (Secondary):** Representing the fertile soil and traditional architecture; used for supportive elements and depth.
- **Harvest Gold (Accent):** The warmth of the sun and ripe crops; used sparingly for highlights and important call-to-outs.
- **Cream (Background):** A warm, paper-like off-white that reduces digital eye strain and enhances the editorial feel.
- **Dark Navy (Text):** Deep and grounded, providing high contrast for optimal readability without the harshness of pure black.

## Typography
This design system employs a classic serif/sans-serif pairing to evoke an "editorial" feel.
- **Headlines:** Playfair Display provides a graceful, high-contrast serif look. Use it for storytelling, section titles, and large display quotes. 
- **Body & UI:** Plus Jakarta Sans offers a modern, friendly, and highly legible experience for long-form reading and functional UI labels.
- **Styling Note:** Use wide letter-spacing for `label-md` to denote category headers or metadata, reinforcing the premium aesthetic.

## Layout & Spacing
The layout follows a **Fluid Grid** model with strict vertical rhythm based on an 8px base unit.
- **Desktop:** A 12-column grid with a maximum container width of 1280px. Use large `section-gap-lg` (120px) between major content blocks to preserve the premium, airy feel.
- **Mobile:** A 4-column grid with 20px side margins.
- **Editorial Dividers:** Use thin (1px) horizontal rules in `#6B4226` at 10% opacity to separate content without creating visual clutter.

## Elevation & Depth
In alignment with the "Rural Contemporary" style, depth is achieved through **Tonal Layers** and **Subtle Shadows** rather than aggressive elevation.
- **Surface Tiering:** Use the background Cream (#F9F6F0) as the base. Elevated cards should use a pure White (#FFFFFF) with a very soft, diffused shadow (Blur 20px, Y 4px, 5% opacity of Dark Navy).
- **Interactive Depth:** Buttons should use a slight 2px vertical offset on hover to feel "pressed" or "lifted" in a tactile, subtle way.
- **Image Treatment:** Photos should have a slight inner glow or very soft border radius to integrate smoothly into the cream background.

## Shapes
This design system uses a **Soft** shape language.
- **Standard Radius:** 4px (0.25rem) for buttons, inputs, and small cards to maintain a crisp, professional look.
- **Large Radius:** 8px (0.5rem) for primary imagery and large containers to soften the overall presentation.
- **Full Radius:** Use pill-shapes only for tags or status indicators.

## Components
- **Buttons:** Primary buttons use Menoreh Green (#2D6A4F) with white text. Secondary buttons use an outline style with the Earth Tone Brown (#6B4226). Labels are always in Plus Jakarta Sans Semi-Bold.
- **Cards:** Use a "Photo-First" approach. Text is placed either on a white container below the image or overlaid with a subtle linear gradient for legibility.
- **Chips/Tags:** Small, pill-shaped elements using 10% opacity of the Accent Gold (#F4A51E) with Dark Navy text.
- **Input Fields:** Clean, bottom-border-only or light-outlined fields with the Cream background. Focus states use a 2px Menoreh Green underline.
- **Editorial Dividers:** 1px horizontal lines used to separate sections, often accompanied by a `label-md` category title.
- **Lists:** Clean, spacious lists using small Earth Tone Brown icons or simple bullets to maintain a minimalist look.