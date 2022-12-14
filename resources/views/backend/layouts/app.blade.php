<script>
    let countryId = '38';
    let stateId = '671';
    let cityId = '10303';
    let isEdit = true;
    let phoneNo = "114378861383"
    let aboutMeText = "Add About me...";
    let selectState = "Select State";
    let selectCity = "Select City";
    let regionCode = "1";
</script>
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="To manage the Asfia Aiman Portfolio">
    <meta name="author" content="Asfia Aiman">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Asfia Aiman - @yield('title')</title>

    {{-- Fevicon --}}
    <link rel="icon" href="https://infyportfolio.infyom.com/img/favicon-32x32.png" type="image/png">

    <!-- Fonts -->
    <link href="//fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">

    <!-- Icons -->
    <link href="https://infyportfolio.infyom.com/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://infyportfolio.infyom.com/vendor/nucleo/css/nucleo.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('backend-assets/css/font-awesome.min.css') }}" type="text/css">
    <link href="https://infyportfolio.infyom.com/assets/css/sweetalert2.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://infyportfolio.infyom.com/assets/css/iziToast.min.css">
    <link href="https://infyportfolio.infyom.com/assets/css/select2.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://infyportfolio.infyom.com/assets/css/bootstrap-datetimepicker.min.css">

    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://infyportfolio.infyom.com/css/argon.css" type="text/css">

    <!-- Template CSS -->
    <link rel="stylesheet" href="https://infyportfolio.infyom.com/assets/css/style.css">

    <link href="https://infyportfolio.infyom.com/assets/css/phone-number-code.css" rel="stylesheet" type="text/css" />
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="https://infyportfolio.infyom.com/assets/css/intel/css/intlTelInput.css">
    <link rel="stylesheet" href="https://infyportfolio.infyom.com/assets/css/summernote.min.css">
    <script type="text/javascript">
        const Ziggy = {
            "url": "https:\/\/infyportfolio.infyom.com",
            "port": null,
            "defaults": {},
            "routes": {
                "debugbar.openhandler": {
                    "uri": "_debugbar\/open",
                    "methods": ["GET", "HEAD"]
                },
                "debugbar.clockwork": {
                    "uri": "_debugbar\/clockwork\/{id}",
                    "methods": ["GET", "HEAD"]
                },
                "debugbar.assets.css": {
                    "uri": "_debugbar\/assets\/stylesheets",
                    "methods": ["GET", "HEAD"]
                },
                "debugbar.assets.js": {
                    "uri": "_debugbar\/assets\/javascript",
                    "methods": ["GET", "HEAD"]
                },
                "debugbar.cache.delete": {
                    "uri": "_debugbar\/cache\/{key}\/{tags?}",
                    "methods": ["DELETE"]
                },
                "ignition.healthCheck": {
                    "uri": "_ignition\/health-check",
                    "methods": ["GET", "HEAD"]
                },
                "ignition.executeSolution": {
                    "uri": "_ignition\/execute-solution",
                    "methods": ["POST"]
                },
                "ignition.shareReport": {
                    "uri": "_ignition\/share-report",
                    "methods": ["POST"]
                },
                "ignition.scripts": {
                    "uri": "_ignition\/scripts\/{script}",
                    "methods": ["GET", "HEAD"]
                },
                "ignition.styles": {
                    "uri": "_ignition\/styles\/{style}",
                    "methods": ["GET", "HEAD"]
                },
                "livewire.message": {
                    "uri": "livewire\/message\/{name}",
                    "methods": ["POST"]
                },
                "livewire.upload-file": {
                    "uri": "livewire\/upload-file",
                    "methods": ["POST"]
                },
                "livewire.preview-file": {
                    "uri": "livewire\/preview-file\/{filename}",
                    "methods": ["GET", "HEAD"]
                },
                "login": {
                    "uri": "login",
                    "methods": ["GET", "HEAD"]
                },
                "front": {
                    "uri": "\/",
                    "methods": ["GET", "HEAD"]
                },
                "logout": {
                    "uri": "logout",
                    "methods": ["POST"]
                },
                "register": {
                    "uri": "register",
                    "methods": ["GET", "HEAD"]
                },
                "password.request": {
                    "uri": "password\/reset",
                    "methods": ["GET", "HEAD"]
                },
                "password.email": {
                    "uri": "password\/email",
                    "methods": ["POST"]
                },
                "password.reset": {
                    "uri": "password\/reset\/{token}",
                    "methods": ["GET", "HEAD"]
                },
                "password.update": {
                    "uri": "password\/reset",
                    "methods": ["POST"]
                },
                "password.confirm": {
                    "uri": "password\/confirm",
                    "methods": ["GET", "HEAD"]
                },
                "update.language": {
                    "uri": "update-language",
                    "methods": ["POST"]
                },
                "send.enquiry": {
                    "uri": "send-enquiry",
                    "methods": ["POST"]
                },
                "blog.details": {
                    "uri": "blog-details\/{slug}",
                    "methods": ["GET", "HEAD"]
                },
                "blog.lists": {
                    "uri": "blog-lists",
                    "methods": ["GET", "HEAD"]
                },
                "category.blogs": {
                    "uri": "blog-category\/{slug}",
                    "methods": ["GET", "HEAD"]
                },
                "search.blog": {
                    "uri": "search-blog",
                    "methods": ["GET", "HEAD"]
                },
                "hire.request": {
                    "uri": "hire-request",
                    "methods": ["POST"]
                },
                "users.edit": {
                    "uri": "users\/{user}\/edit",
                    "methods": ["GET", "HEAD"],
                    "bindings": {
                        "user": "id"
                    }
                },
                "edit-profile": {
                    "uri": "profile\/{user}\/edit",
                    "methods": ["GET", "HEAD"],
                    "bindings": {
                        "user": "id"
                    }
                },
                "update-profile": {
                    "uri": "update-profile",
                    "methods": ["POST"]
                },
                "users.update": {
                    "uri": "users\/{user}\/update",
                    "methods": ["PUT"],
                    "bindings": {
                        "user": "id"
                    }
                },
                "change.password": {
                    "uri": "change-password",
                    "methods": ["POST"]
                },
                "update.profile.image": {
                    "uri": "update-profile-image",
                    "methods": ["POST"]
                },
                "states-list": {
                    "uri": "states-list",
                    "methods": ["GET", "HEAD"]
                },
                "cities-list": {
                    "uri": "cities-list",
                    "methods": ["GET", "HEAD"]
                },
                "experiences.index": {
                    "uri": "experiences",
                    "methods": ["GET", "HEAD"]
                },
                "experiences.create": {
                    "uri": "experiences\/create",
                    "methods": ["GET", "HEAD"]
                },
                "experiences.store": {
                    "uri": "experiences",
                    "methods": ["POST"]
                },
                "experiences.show": {
                    "uri": "experiences\/{experience}",
                    "methods": ["GET", "HEAD"],
                    "bindings": {
                        "experience": "id"
                    }
                },
                "experiences.edit": {
                    "uri": "experiences\/{experience}\/edit",
                    "methods": ["GET", "HEAD"],
                    "bindings": {
                        "experience": "id"
                    }
                },
                "experiences.update": {
                    "uri": "experiences\/{experience}",
                    "methods": ["PUT", "PATCH"],
                    "bindings": {
                        "experience": "id"
                    }
                },
                "experiences.destroy": {
                    "uri": "experiences\/{experience}",
                    "methods": ["DELETE"],
                    "bindings": {
                        "experience": "id"
                    }
                },
                "experience.work.here": {
                    "uri": "experiences\/{experience}\/work-here",
                    "methods": ["POST"],
                    "bindings": {
                        "experience": "id"
                    }
                },
                "educations.index": {
                    "uri": "educations",
                    "methods": ["GET", "HEAD"]
                },
                "educations.create": {
                    "uri": "educations\/create",
                    "methods": ["GET", "HEAD"]
                },
                "educations.store": {
                    "uri": "educations",
                    "methods": ["POST"]
                },
                "educations.show": {
                    "uri": "educations\/{education}",
                    "methods": ["GET", "HEAD"],
                    "bindings": {
                        "education": "id"
                    }
                },
                "educations.edit": {
                    "uri": "educations\/{education}\/edit",
                    "methods": ["GET", "HEAD"],
                    "bindings": {
                        "education": "id"
                    }
                },
                "educations.update": {
                    "uri": "educations\/{education}",
                    "methods": ["PUT", "PATCH"],
                    "bindings": {
                        "education": "id"
                    }
                },
                "educations.destroy": {
                    "uri": "educations\/{education}",
                    "methods": ["DELETE"],
                    "bindings": {
                        "education": "id"
                    }
                },
                "educations.study.here": {
                    "uri": "educations\/{education}\/study-here",
                    "methods": ["POST"],
                    "bindings": {
                        "education": "id"
                    }
                },
                "testimonials.index": {
                    "uri": "testimonials",
                    "methods": ["GET", "HEAD"]
                },
                "testimonials.create": {
                    "uri": "testimonials\/create",
                    "methods": ["GET", "HEAD"]
                },
                "testimonials.store": {
                    "uri": "testimonials",
                    "methods": ["POST"]
                },
                "testimonials.show": {
                    "uri": "testimonials\/{testimonial}",
                    "methods": ["GET", "HEAD"],
                    "bindings": {
                        "testimonial": "id"
                    }
                },
                "testimonials.edit": {
                    "uri": "testimonials\/{testimonial}\/edit",
                    "methods": ["GET", "HEAD"],
                    "bindings": {
                        "testimonial": "id"
                    }
                },
                "testimonials.update": {
                    "uri": "testimonials\/{testimonial}",
                    "methods": ["PUT", "PATCH"],
                    "bindings": {
                        "testimonial": "id"
                    }
                },
                "testimonials.destroy": {
                    "uri": "testimonials\/{testimonial}",
                    "methods": ["DELETE"],
                    "bindings": {
                        "testimonial": "id"
                    }
                },
                "testimonial.update": {
                    "uri": "testimonials\/{testimonial}\/update",
                    "methods": ["POST"],
                    "bindings": {
                        "testimonial": "id"
                    }
                },
                "skills.index": {
                    "uri": "skills",
                    "methods": ["GET", "HEAD"]
                },
                "skills.create": {
                    "uri": "skills\/create",
                    "methods": ["GET", "HEAD"]
                },
                "skills.store": {
                    "uri": "skills",
                    "methods": ["POST"]
                },
                "skills.show": {
                    "uri": "skills\/{skill}",
                    "methods": ["GET", "HEAD"]
                },
                "skills.edit": {
                    "uri": "skills\/{skill}\/edit",
                    "methods": ["GET", "HEAD"],
                    "bindings": {
                        "skill": "id"
                    }
                },
                "skills.update": {
                    "uri": "skills\/{skill}",
                    "methods": ["PUT", "PATCH"],
                    "bindings": {
                        "skill": "id"
                    }
                },
                "skills.destroy": {
                    "uri": "skills\/{skill}",
                    "methods": ["DELETE"],
                    "bindings": {
                        "skill": "id"
                    }
                },
                "pricing-plans.index": {
                    "uri": "pricing-plans",
                    "methods": ["GET", "HEAD"]
                },
                "pricing-plans.create": {
                    "uri": "pricing-plans\/create",
                    "methods": ["GET", "HEAD"]
                },
                "pricing-plans.store": {
                    "uri": "pricing-plans",
                    "methods": ["POST"]
                },
                "pricing-plans.show": {
                    "uri": "pricing-plans\/{pricing_plan}",
                    "methods": ["GET", "HEAD"]
                },
                "pricing-plans.edit": {
                    "uri": "pricing-plans\/{pricing_plan}\/edit",
                    "methods": ["GET", "HEAD"]
                },
                "pricing-plans.update": {
                    "uri": "pricing-plans\/{pricing_plan}",
                    "methods": ["PUT", "PATCH"]
                },
                "pricing-plans.destroy": {
                    "uri": "pricing-plans\/{pricing_plan}",
                    "methods": ["DELETE"]
                },
                "plan-currencies.index": {
                    "uri": "plan-currencies",
                    "methods": ["GET", "HEAD"]
                },
                "plan-currencies.create": {
                    "uri": "plan-currencies\/create",
                    "methods": ["GET", "HEAD"]
                },
                "plan-currencies.store": {
                    "uri": "plan-currencies",
                    "methods": ["POST"]
                },
                "plan-currencies.show": {
                    "uri": "plan-currencies\/{plan_currency}",
                    "methods": ["GET", "HEAD"]
                },
                "plan-currencies.edit": {
                    "uri": "plan-currencies\/{plan_currency}\/edit",
                    "methods": ["GET", "HEAD"]
                },
                "plan-currencies.update": {
                    "uri": "plan-currencies\/{plan_currency}",
                    "methods": ["PUT", "PATCH"]
                },
                "plan-currencies.destroy": {
                    "uri": "plan-currencies\/{plan_currency}",
                    "methods": ["DELETE"]
                },
                "recent-work-types.index": {
                    "uri": "recent-work-types",
                    "methods": ["GET", "HEAD"]
                },
                "recent-work-types.create": {
                    "uri": "recent-work-types\/create",
                    "methods": ["GET", "HEAD"]
                },
                "recent-work-types.store": {
                    "uri": "recent-work-types",
                    "methods": ["POST"]
                },
                "recent-work-types.show": {
                    "uri": "recent-work-types\/{recent_work_type}",
                    "methods": ["GET", "HEAD"]
                },
                "recent-work-types.edit": {
                    "uri": "recent-work-types\/{recent_work_type}\/edit",
                    "methods": ["GET", "HEAD"]
                },
                "recent-work-types.update": {
                    "uri": "recent-work-types\/{recent_work_type}",
                    "methods": ["PUT", "PATCH"]
                },
                "recent-work-types.destroy": {
                    "uri": "recent-work-types\/{recent_work_type}",
                    "methods": ["DELETE"]
                },
                "recent-works.index": {
                    "uri": "recent-works",
                    "methods": ["GET", "HEAD"]
                },
                "recent-works.create": {
                    "uri": "recent-works\/create",
                    "methods": ["GET", "HEAD"]
                },
                "recent-works.store": {
                    "uri": "recent-works",
                    "methods": ["POST"]
                },
                "recent-works.show": {
                    "uri": "recent-works\/{recent_work}",
                    "methods": ["GET", "HEAD"]
                },
                "recent-works.edit": {
                    "uri": "recent-works\/{recent_work}\/edit",
                    "methods": ["GET", "HEAD"]
                },
                "recent-works.update": {
                    "uri": "recent-works\/{recent_work}",
                    "methods": ["PUT", "PATCH"]
                },
                "recent-works.destroy": {
                    "uri": "recent-works\/{recent_work}",
                    "methods": ["DELETE"]
                },
                "recent.work.update": {
                    "uri": "recent-works\/{recent_work}\/update",
                    "methods": ["POST"]
                },
                "recent.work.attachments-delete": {
                    "uri": "recent-works\/{media}\/attachments-delete",
                    "methods": ["DELETE"],
                    "bindings": {
                        "media": "id"
                    }
                },
                "recent.work.attachments-download": {
                    "uri": "recent-works\/{media}\/attachments-download",
                    "methods": ["GET", "HEAD"],
                    "bindings": {
                        "media": "id"
                    }
                },
                "recent.work.all.attachments-download": {
                    "uri": "recent-works\/{recent_work}\/all-attachments-download",
                    "methods": ["GET", "HEAD"]
                },
                "services.index": {
                    "uri": "services",
                    "methods": ["GET", "HEAD"]
                },
                "services.create": {
                    "uri": "services\/create",
                    "methods": ["GET", "HEAD"]
                },
                "services.store": {
                    "uri": "services",
                    "methods": ["POST"]
                },
                "services.show": {
                    "uri": "services\/{service}",
                    "methods": ["GET", "HEAD"],
                    "bindings": {
                        "service": "id"
                    }
                },
                "services.edit": {
                    "uri": "services\/{service}\/edit",
                    "methods": ["GET", "HEAD"],
                    "bindings": {
                        "service": "id"
                    }
                },
                "services.update": {
                    "uri": "services\/{service}",
                    "methods": ["PUT", "PATCH"],
                    "bindings": {
                        "service": "id"
                    }
                },
                "services.destroy": {
                    "uri": "services\/{service}",
                    "methods": ["DELETE"],
                    "bindings": {
                        "service": "id"
                    }
                },
                "service.update": {
                    "uri": "services\/{service}\/update",
                    "methods": ["POST"],
                    "bindings": {
                        "service": "id"
                    }
                },
                "achievements.index": {
                    "uri": "achievements",
                    "methods": ["GET", "HEAD"]
                },
                "achievements.create": {
                    "uri": "achievements\/create",
                    "methods": ["GET", "HEAD"]
                },
                "achievements.store": {
                    "uri": "achievements",
                    "methods": ["POST"]
                },
                "achievements.show": {
                    "uri": "achievements\/{achievement}",
                    "methods": ["GET", "HEAD"],
                    "bindings": {
                        "achievement": "id"
                    }
                },
                "achievements.edit": {
                    "uri": "achievements\/{achievement}\/edit",
                    "methods": ["GET", "HEAD"],
                    "bindings": {
                        "achievement": "id"
                    }
                },
                "achievements.update": {
                    "uri": "achievements\/{achievement}",
                    "methods": ["PUT", "PATCH"],
                    "bindings": {
                        "achievement": "id"
                    }
                },
                "achievements.destroy": {
                    "uri": "achievements\/{achievement}",
                    "methods": ["DELETE"],
                    "bindings": {
                        "achievement": "id"
                    }
                },
                "achievement-update": {
                    "uri": "achievements\/{achievement}\/update",
                    "methods": ["POST"],
                    "bindings": {
                        "achievement": "id"
                    }
                },
                "settings.index": {
                    "uri": "settings",
                    "methods": ["GET", "HEAD"]
                },
                "settings.update": {
                    "uri": "settings",
                    "methods": ["PUT"]
                },
                "settings.updateTheme": {
                    "uri": "settings\/theme",
                    "methods": ["PUT"]
                },
                "settings.update.social": {
                    "uri": "settings\/social",
                    "methods": ["PUT"]
                },
                "enquiries.index": {
                    "uri": "enquiries",
                    "methods": ["GET", "HEAD"]
                },
                "enquiries.destroy": {
                    "uri": "enquiries\/{enquiry}",
                    "methods": ["DELETE"],
                    "bindings": {
                        "enquiry": "id"
                    }
                },
                "enquiries.show": {
                    "uri": "enquiries\/{enquiry}",
                    "methods": ["GET", "HEAD"],
                    "bindings": {
                        "enquiry": "id"
                    }
                },
                "hire-me.index": {
                    "uri": "hire-me",
                    "methods": ["GET", "HEAD"]
                },
                "hire-me.create": {
                    "uri": "hire-me\/create",
                    "methods": ["GET", "HEAD"]
                },
                "hire-me.store": {
                    "uri": "hire-me",
                    "methods": ["POST"]
                },
                "hire-me.show": {
                    "uri": "hire-me\/{hire_me}",
                    "methods": ["GET", "HEAD"]
                },
                "hire-me.edit": {
                    "uri": "hire-me\/{hire_me}\/edit",
                    "methods": ["GET", "HEAD"]
                },
                "hire-me.update": {
                    "uri": "hire-me\/{hire_me}",
                    "methods": ["PUT", "PATCH"]
                },
                "hire-me.destroy": {
                    "uri": "hire-me\/{hire_me}",
                    "methods": ["DELETE"]
                },
                "blogs.index": {
                    "uri": "blogs",
                    "methods": ["GET", "HEAD"]
                },
                "blogs.create": {
                    "uri": "blogs\/create",
                    "methods": ["GET", "HEAD"]
                },
                "blogs.store": {
                    "uri": "blogs",
                    "methods": ["POST"]
                },
                "blogs.show": {
                    "uri": "blogs\/{blog}",
                    "methods": ["GET", "HEAD"],
                    "bindings": {
                        "blog": "id"
                    }
                },
                "blogs.edit": {
                    "uri": "blogs\/{blog}\/edit",
                    "methods": ["GET", "HEAD"],
                    "bindings": {
                        "blog": "id"
                    }
                },
                "blogs.update": {
                    "uri": "blogs\/{blog}",
                    "methods": ["PUT", "PATCH"],
                    "bindings": {
                        "blog": "id"
                    }
                },
                "blogs.destroy": {
                    "uri": "blogs\/{blog}",
                    "methods": ["DELETE"],
                    "bindings": {
                        "blog": "id"
                    }
                },
                "categories.index": {
                    "uri": "categories",
                    "methods": ["GET", "HEAD"]
                },
                "categories.create": {
                    "uri": "categories\/create",
                    "methods": ["GET", "HEAD"]
                },
                "categories.store": {
                    "uri": "categories",
                    "methods": ["POST"]
                },
                "categories.show": {
                    "uri": "categories\/{category}",
                    "methods": ["GET", "HEAD"],
                    "bindings": {
                        "category": "id"
                    }
                },
                "categories.edit": {
                    "uri": "categories\/{category}\/edit",
                    "methods": ["GET", "HEAD"],
                    "bindings": {
                        "category": "id"
                    }
                },
                "categories.update": {
                    "uri": "categories\/{category}",
                    "methods": ["PUT", "PATCH"],
                    "bindings": {
                        "category": "id"
                    }
                },
                "categories.destroy": {
                    "uri": "categories\/{category}",
                    "methods": ["DELETE"],
                    "bindings": {
                        "category": "id"
                    }
                },
                "category.get": {
                    "uri": "categories-get",
                    "methods": ["POST"]
                }
            }
        };

        ! function(t, r) {
            "object" == typeof exports && "undefined" != typeof module ? module.exports = r() : "function" ==
                typeof define && define.amd ? define(r) : (t || self).route = r()
        }(this, function() {
            function t(t, r) {
                for (var n = 0; n < r.length; n++) {
                    var e = r[n];
                    e.enumerable = e.enumerable || !1, e.configurable = !0, "value" in e && (e.writable = !0), Object
                        .defineProperty(t, e.key, e)
                }
            }

            function r(r, n, e) {
                return n && t(r.prototype, n), e && t(r, e), Object.defineProperty(r, "prototype", {
                    writable: !1
                }), r
            }

            function n() {
                return n = Object.assign || function(t) {
                    for (var r = 1; r < arguments.length; r++) {
                        var n = arguments[r];
                        for (var e in n) Object.prototype.hasOwnProperty.call(n, e) && (t[e] = n[e])
                    }
                    return t
                }, n.apply(this, arguments)
            }

            function e(t) {
                return e = Object.setPrototypeOf ? Object.getPrototypeOf : function(t) {
                    return t.__proto__ || Object.getPrototypeOf(t)
                }, e(t)
            }

            function o(t, r) {
                return o = Object.setPrototypeOf || function(t, r) {
                    return t.__proto__ = r, t
                }, o(t, r)
            }

            function i() {
                if ("undefined" == typeof Reflect || !Reflect.construct) return !1;
                if (Reflect.construct.sham) return !1;
                if ("function" == typeof Proxy) return !0;
                try {
                    return Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], function() {})), !0
                } catch (t) {
                    return !1
                }
            }

            function u(t, r, n) {
                return u = i() ? Reflect.construct : function(t, r, n) {
                    var e = [null];
                    e.push.apply(e, r);
                    var i = new(Function.bind.apply(t, e));
                    return n && o(i, n.prototype), i
                }, u.apply(null, arguments)
            }

            function f(t) {
                var r = "function" == typeof Map ? new Map : void 0;
                return f = function(t) {
                    if (null === t || -1 === Function.toString.call(t).indexOf("[native code]")) return t;
                    if ("function" != typeof t) throw new TypeError(
                        "Super expression must either be null or a function");
                    if (void 0 !== r) {
                        if (r.has(t)) return r.get(t);
                        r.set(t, n)
                    }

                    function n() {
                        return u(t, arguments, e(this).constructor)
                    }
                    return n.prototype = Object.create(t.prototype, {
                        constructor: {
                            value: n,
                            enumerable: !1,
                            writable: !0,
                            configurable: !0
                        }
                    }), o(n, t)
                }, f(t)
            }
            var a = String.prototype.replace,
                c = /%20/g,
                l = "RFC3986",
                s = {
                    default: l,
                    formatters: {
                        RFC1738: function(t) {
                            return a.call(t, c, "+")
                        },
                        RFC3986: function(t) {
                            return String(t)
                        }
                    },
                    RFC1738: "RFC1738",
                    RFC3986: l
                },
                v = Object.prototype.hasOwnProperty,
                p = Array.isArray,
                y = function() {
                    for (var t = [], r = 0; r < 256; ++r) t.push("%" + ((r < 16 ? "0" : "") + r.toString(16))
                        .toUpperCase());
                    return t
                }(),
                d = function(t, r) {
                    for (var n = r && r.plainObjects ? Object.create(null) : {}, e = 0; e < t.length; ++e) void 0 !== t[
                        e] && (n[e] = t[e]);
                    return n
                },
                b = {
                    arrayToObject: d,
                    assign: function(t, r) {
                        return Object.keys(r).reduce(function(t, n) {
                            return t[n] = r[n], t
                        }, t)
                    },
                    combine: function(t, r) {
                        return [].concat(t, r)
                    },
                    compact: function(t) {
                        for (var r = [{
                                obj: {
                                    o: t
                                },
                                prop: "o"
                            }], n = [], e = 0; e < r.length; ++e)
                            for (var o = r[e], i = o.obj[o.prop], u = Object.keys(i), f = 0; f < u.length; ++f) {
                                var a = u[f],
                                    c = i[a];
                                "object" == typeof c && null !== c && -1 === n.indexOf(c) && (r.push({
                                    obj: i,
                                    prop: a
                                }), n.push(c))
                            }
                        return function(t) {
                            for (; t.length > 1;) {
                                var r = t.pop(),
                                    n = r.obj[r.prop];
                                if (p(n)) {
                                    for (var e = [], o = 0; o < n.length; ++o) void 0 !== n[o] && e.push(n[o]);
                                    r.obj[r.prop] = e
                                }
                            }
                        }(r), t
                    },
                    decode: function(t, r, n) {
                        var e = t.replace(/\+/g, " ");
                        if ("iso-8859-1" === n) return e.replace(/%[0-9a-f]{2}/gi, unescape);
                        try {
                            return decodeURIComponent(e)
                        } catch (t) {
                            return e
                        }
                    },
                    encode: function(t, r, n, e, o) {
                        if (0 === t.length) return t;
                        var i = t;
                        if ("symbol" == typeof t ? i = Symbol.prototype.toString.call(t) : "string" != typeof t && (
                                i = String(t)), "iso-8859-1" === n) return escape(i).replace(/%u[0-9a-f]{4}/gi,
                            function(t) {
                                return "%26%23" + parseInt(t.slice(2), 16) + "%3B"
                            });
                        for (var u = "", f = 0; f < i.length; ++f) {
                            var a = i.charCodeAt(f);
                            45 === a || 46 === a || 95 === a || 126 === a || a >= 48 && a <= 57 || a >= 65 && a <=
                                90 || a >= 97 && a <= 122 || o === s.RFC1738 && (40 === a || 41 === a) ? u += i
                                .charAt(f) : a < 128 ? u += y[a] : a < 2048 ? u += y[192 | a >> 6] + y[128 | 63 &
                                a] : a < 55296 || a >= 57344 ? u += y[224 | a >> 12] + y[128 | a >> 6 & 63] + y[
                                    128 | 63 & a] : (a = 65536 + ((1023 & a) << 10 | 1023 & i.charCodeAt(f += 1)),
                                    u += y[240 | a >> 18] + y[128 | a >> 12 & 63] + y[128 | a >> 6 & 63] + y[128 |
                                        63 & a])
                        }
                        return u
                    },
                    isBuffer: function(t) {
                        return !(!t || "object" != typeof t || !(t.constructor && t.constructor.isBuffer && t
                            .constructor.isBuffer(t)))
                    },
                    isRegExp: function(t) {
                        return "[object RegExp]" === Object.prototype.toString.call(t)
                    },
                    maybeMap: function(t, r) {
                        if (p(t)) {
                            for (var n = [], e = 0; e < t.length; e += 1) n.push(r(t[e]));
                            return n
                        }
                        return r(t)
                    },
                    merge: function t(r, n, e) {
                        if (!n) return r;
                        if ("object" != typeof n) {
                            if (p(r)) r.push(n);
                            else {
                                if (!r || "object" != typeof r) return [r, n];
                                (e && (e.plainObjects || e.allowPrototypes) || !v.call(Object.prototype, n)) && (r[
                                    n] = !0)
                            }
                            return r
                        }
                        if (!r || "object" != typeof r) return [r].concat(n);
                        var o = r;
                        return p(r) && !p(n) && (o = d(r, e)), p(r) && p(n) ? (n.forEach(function(n, o) {
                            if (v.call(r, o)) {
                                var i = r[o];
                                i && "object" == typeof i && n && "object" == typeof n ? r[o] = t(i, n,
                                    e) : r.push(n)
                            } else r[o] = n
                        }), r) : Object.keys(n).reduce(function(r, o) {
                            var i = n[o];
                            return r[o] = v.call(r, o) ? t(r[o], i, e) : i, r
                        }, o)
                    }
                },
                h = Object.prototype.hasOwnProperty,
                m = {
                    brackets: function(t) {
                        return t + "[]"
                    },
                    comma: "comma",
                    indices: function(t, r) {
                        return t + "[" + r + "]"
                    },
                    repeat: function(t) {
                        return t
                    }
                },
                g = Array.isArray,
                j = String.prototype.split,
                w = Array.prototype.push,
                O = function(t, r) {
                    w.apply(t, g(r) ? r : [r])
                },
                E = Date.prototype.toISOString,
                R = s.default,
                S = {
                    addQueryPrefix: !1,
                    allowDots: !1,
                    charset: "utf-8",
                    charsetSentinel: !1,
                    delimiter: "&",
                    encode: !0,
                    encoder: b.encode,
                    encodeValuesOnly: !1,
                    format: R,
                    formatter: s.formatters[R],
                    indices: !1,
                    serializeDate: function(t) {
                        return E.call(t)
                    },
                    skipNulls: !1,
                    strictNullHandling: !1
                },
                T = function t(r, n, e, o, i, u, f, a, c, l, s, v, p, y) {
                    var d, h = r;
                    if ("function" == typeof f ? h = f(n, h) : h instanceof Date ? h = l(h) : "comma" === e && g(h) && (
                            h = b.maybeMap(h, function(t) {
                                return t instanceof Date ? l(t) : t
                            })), null === h) {
                        if (o) return u && !p ? u(n, S.encoder, y, "key", s) : n;
                        h = ""
                    }
                    if ("string" == typeof(d = h) || "number" == typeof d || "boolean" == typeof d || "symbol" ==
                        typeof d || "bigint" == typeof d || b.isBuffer(h)) {
                        if (u) {
                            var m = p ? n : u(n, S.encoder, y, "key", s);
                            if ("comma" === e && p) {
                                for (var w = j.call(String(h), ","), E = "", R = 0; R < w.length; ++R) E += (0 === R ?
                                    "" : ",") + v(u(w[R], S.encoder, y, "value", s));
                                return [v(m) + "=" + E]
                            }
                            return [v(m) + "=" + v(u(h, S.encoder, y, "value", s))]
                        }
                        return [v(n) + "=" + v(String(h))]
                    }
                    var T, k = [];
                    if (void 0 === h) return k;
                    if ("comma" === e && g(h)) T = [{
                        value: h.length > 0 ? h.join(",") || null : void 0
                    }];
                    else if (g(f)) T = f;
                    else {
                        var x = Object.keys(h);
                        T = a ? x.sort(a) : x
                    }
                    for (var N = 0; N < T.length; ++N) {
                        var C = T[N],
                            D = "object" == typeof C && void 0 !== C.value ? C.value : h[C];
                        if (!i || null !== D) {
                            var F = g(h) ? "function" == typeof e ? e(n, C) : n : n + (c ? "." + C : "[" + C + "]");
                            O(k, t(D, F, e, o, i, u, f, a, c, l, s, v, p, y))
                        }
                    }
                    return k
                },
                k = Object.prototype.hasOwnProperty,
                x = Array.isArray,
                N = {
                    allowDots: !1,
                    allowPrototypes: !1,
                    arrayLimit: 20,
                    charset: "utf-8",
                    charsetSentinel: !1,
                    comma: !1,
                    decoder: b.decode,
                    delimiter: "&",
                    depth: 5,
                    ignoreQueryPrefix: !1,
                    interpretNumericEntities: !1,
                    parameterLimit: 1e3,
                    parseArrays: !0,
                    plainObjects: !1,
                    strictNullHandling: !1
                },
                C = function(t) {
                    return t.replace(/&#(\d+);/g, function(t, r) {
                        return String.fromCharCode(parseInt(r, 10))
                    })
                },
                D = function(t, r) {
                    return t && "string" == typeof t && r.comma && t.indexOf(",") > -1 ? t.split(",") : t
                },
                F = function(t, r, n, e) {
                    if (t) {
                        var o = n.allowDots ? t.replace(/\.([^.[]+)/g, "[$1]") : t,
                            i = /(\[[^[\]]*])/g,
                            u = n.depth > 0 && /(\[[^[\]]*])/.exec(o),
                            f = u ? o.slice(0, u.index) : o,
                            a = [];
                        if (f) {
                            if (!n.plainObjects && k.call(Object.prototype, f) && !n.allowPrototypes) return;
                            a.push(f)
                        }
                        for (var c = 0; n.depth > 0 && null !== (u = i.exec(o)) && c < n.depth;) {
                            if (c += 1, !n.plainObjects && k.call(Object.prototype, u[1].slice(1, -1)) && !n
                                .allowPrototypes) return;
                            a.push(u[1])
                        }
                        return u && a.push("[" + o.slice(u.index) + "]"),
                            function(t, r, n, e) {
                                for (var o = e ? r : D(r, n), i = t.length - 1; i >= 0; --i) {
                                    var u, f = t[i];
                                    if ("[]" === f && n.parseArrays) u = [].concat(o);
                                    else {
                                        u = n.plainObjects ? Object.create(null) : {};
                                        var a = "[" === f.charAt(0) && "]" === f.charAt(f.length - 1) ? f.slice(1, -1) :
                                            f,
                                            c = parseInt(a, 10);
                                        n.parseArrays || "" !== a ? !isNaN(c) && f !== a && String(c) === a && c >= 0 &&
                                            n.parseArrays && c <= n.arrayLimit ? (u = [])[c] = o : "__proto__" !== a &&
                                            (u[a] = o) : u = {
                                                0: o
                                            }
                                    }
                                    o = u
                                }
                                return o
                            }(a, r, n, e)
                    }
                },
                $ = function(t, r) {
                    var n = function(t) {
                        if (!t) return N;
                        if (null != t.decoder && "function" != typeof t.decoder) throw new TypeError(
                            "Decoder has to be a function.");
                        if (void 0 !== t.charset && "utf-8" !== t.charset && "iso-8859-1" !== t.charset)
                        throw new TypeError("The charset option must be either utf-8, iso-8859-1, or undefined");
                        return {
                            allowDots: void 0 === t.allowDots ? N.allowDots : !!t.allowDots,
                            allowPrototypes: "boolean" == typeof t.allowPrototypes ? t.allowPrototypes : N
                                .allowPrototypes,
                            arrayLimit: "number" == typeof t.arrayLimit ? t.arrayLimit : N.arrayLimit,
                            charset: void 0 === t.charset ? N.charset : t.charset,
                            charsetSentinel: "boolean" == typeof t.charsetSentinel ? t.charsetSentinel : N
                                .charsetSentinel,
                            comma: "boolean" == typeof t.comma ? t.comma : N.comma,
                            decoder: "function" == typeof t.decoder ? t.decoder : N.decoder,
                            delimiter: "string" == typeof t.delimiter || b.isRegExp(t.delimiter) ? t.delimiter : N
                                .delimiter,
                            depth: "number" == typeof t.depth || !1 === t.depth ? +t.depth : N.depth,
                            ignoreQueryPrefix: !0 === t.ignoreQueryPrefix,
                            interpretNumericEntities: "boolean" == typeof t.interpretNumericEntities ? t
                                .interpretNumericEntities : N.interpretNumericEntities,
                            parameterLimit: "number" == typeof t.parameterLimit ? t.parameterLimit : N
                                .parameterLimit,
                            parseArrays: !1 !== t.parseArrays,
                            plainObjects: "boolean" == typeof t.plainObjects ? t.plainObjects : N.plainObjects,
                            strictNullHandling: "boolean" == typeof t.strictNullHandling ? t.strictNullHandling : N
                                .strictNullHandling
                        }
                    }(r);
                    if ("" === t || null == t) return n.plainObjects ? Object.create(null) : {};
                    for (var e = "string" == typeof t ? function(t, r) {
                            var n, e = {},
                                o = (r.ignoreQueryPrefix ? t.replace(/^\?/, "") : t).split(r.delimiter, Infinity ===
                                    r.parameterLimit ? void 0 : r.parameterLimit),
                                i = -1,
                                u = r.charset;
                            if (r.charsetSentinel)
                                for (n = 0; n < o.length; ++n) 0 === o[n].indexOf("utf8=") && ("utf8=%E2%9C%93" ===
                                    o[n] ? u = "utf-8" : "utf8=%26%2310003%3B" === o[n] && (u = "iso-8859-1"),
                                    i = n, n = o.length);
                            for (n = 0; n < o.length; ++n)
                                if (n !== i) {
                                    var f, a, c = o[n],
                                        l = c.indexOf("]="),
                                        s = -1 === l ? c.indexOf("=") : l + 1; - 1 === s ? (f = r.decoder(c, N
                                            .decoder, u, "key"), a = r.strictNullHandling ? null : "") : (f = r
                                            .decoder(c.slice(0, s), N.decoder, u, "key"), a = b.maybeMap(D(c.slice(
                                                s + 1), r), function(t) {
                                                return r.decoder(t, N.decoder, u, "value")
                                            })), a && r.interpretNumericEntities && "iso-8859-1" === u && (a = C(
                                        a)), c.indexOf("[]=") > -1 && (a = x(a) ? [a] : a), e[f] = k.call(e, f) ? b
                                        .combine(e[f], a) : a
                                } return e
                        }(t, n) : t, o = n.plainObjects ? Object.create(null) : {}, i = Object.keys(e), u = 0; u < i
                        .length; ++u) {
                        var f = i[u],
                            a = F(f, e[f], n, "string" == typeof t);
                        o = b.merge(o, a, n)
                    }
                    return b.compact(o)
                },
                A = /*#__PURE__*/ function() {
                    function t(t, r, n) {
                        var e, o;
                        this.name = t, this.definition = r, this.bindings = null != (e = r.bindings) ? e : {}, this
                            .wheres = null != (o = r.wheres) ? o : {}, this.config = n
                    }
                    var n = t.prototype;
                    return n.matchesUrl = function(t) {
                        var r = this;
                        if (!this.definition.methods.includes("GET")) return !1;
                        var n = this.template.replace(/(\/?){([^}?]*)(\??)}/g, function(t, n, e, o) {
                                var i, u = "(?<" + e + ">" + ((null == (i = r.wheres[e]) ? void 0 : i.replace(
                                    /(^\^)|(\$$)/g, "")) || "[^/?]+") + ")";
                                return o ? "(" + n + u + ")?" : "" + n + u
                            }).replace(/^\w+:\/\//, ""),
                            e = t.replace(/^\w+:\/\//, "").split("?"),
                            o = e[0],
                            i = e[1],
                            u = new RegExp("^" + n + "/?$").exec(o);
                        return !!u && {
                            params: u.groups,
                            query: $(i)
                        }
                    }, n.compile = function(t) {
                        var r = this,
                            n = this.parameterSegments;
                        return n.length ? this.template.replace(/{([^}?]+)(\??)}/g, function(e, o, i) {
                            var u, f, a;
                            if (!i && [null, void 0].includes(t[o])) throw new Error("Ziggy error: '" + o +
                                "' parameter is required for route '" + r.name + "'.");
                            if (n[n.length - 1].name === o && ".*" === r.wheres[o])
                            return encodeURIComponent(null != (a = t[o]) ? a : "").replace(/%2F/g, "/");
                            if (r.wheres[o] && !new RegExp("^" + (i ? "(" + r.wheres[o] + ")?" : r.wheres[
                                    o]) + "$").test(null != (u = t[o]) ? u : "")) throw new Error(
                                "Ziggy error: '" + o +
                                "' parameter does not match required format '" + r.wheres[o] +
                                "' for route '" + r.name + "'.");
                            return encodeURIComponent(null != (f = t[o]) ? f : "")
                        }).replace(/\/+$/, "") : this.template
                    }, r(t, [{
                        key: "template",
                        get: function() {
                            return ((this.config.absolute ? this.definition.domain ? "" + this.config
                                .url.match(/^\w+:\/\//)[0] + this.definition.domain + (this
                                    .config.port ? ":" + this.config.port : "") : this.config
                                .url : "") + "/" + this.definition.uri).replace(/\/+$/, "")
                        }
                    }, {
                        key: "parameterSegments",
                        get: function() {
                            var t, r;
                            return null != (t = null == (r = this.template.match(/{[^}?]+\??}/g)) ?
                                void 0 : r.map(function(t) {
                                    return {
                                        name: t.replace(/{|\??}/g, ""),
                                        required: !/\?}$/.test(t)
                                    }
                                })) ? t : []
                        }
                    }]), t
                }(),
                P = /*#__PURE__*/ function(t) {
                    var e, i;

                    function u(r, e, o, i) {
                        var u;
                        if (void 0 === o && (o = !0), (u = t.call(this) || this).t = null != i ? i : "undefined" !=
                            typeof Ziggy ? Ziggy : null == globalThis ? void 0 : globalThis.Ziggy, u.t = n({}, u.t, {
                                absolute: o
                            }), r) {
                            if (!u.t.routes[r]) throw new Error("Ziggy error: route '" + r +
                                "' is not in the route list.");
                            u.i = new A(r, u.t.routes[r], u.t), u.u = u.l(e)
                        }
                        return u
                    }
                    i = t, (e = u).prototype = Object.create(i.prototype), e.prototype.constructor = e, o(e, i);
                    var f = u.prototype;
                    return f.toString = function() {
                        var t = this,
                            r = Object.keys(this.u).filter(function(r) {
                                return !t.i.parameterSegments.some(function(t) {
                                    return t.name === r
                                })
                            }).filter(function(t) {
                                return "_query" !== t
                            }).reduce(function(r, e) {
                                var o;
                                return n({}, r, ((o = {})[e] = t.u[e], o))
                            }, {});
                        return this.i.compile(this.u) + function(t, r) {
                            var n, e = t,
                                o = function(t) {
                                    if (!t) return S;
                                    if (null != t.encoder && "function" != typeof t.encoder)
                                    throw new TypeError("Encoder has to be a function.");
                                    var r = t.charset || S.charset;
                                    if (void 0 !== t.charset && "utf-8" !== t.charset && "iso-8859-1" !== t
                                        .charset) throw new TypeError(
                                        "The charset option must be either utf-8, iso-8859-1, or undefined"
                                        );
                                    var n = s.default;
                                    if (void 0 !== t.format) {
                                        if (!h.call(s.formatters, t.format)) throw new TypeError(
                                            "Unknown format option provided.");
                                        n = t.format
                                    }
                                    var e = s.formatters[n],
                                        o = S.filter;
                                    return ("function" == typeof t.filter || g(t.filter)) && (o = t.filter), {
                                        addQueryPrefix: "boolean" == typeof t.addQueryPrefix ? t
                                            .addQueryPrefix : S.addQueryPrefix,
                                        allowDots: void 0 === t.allowDots ? S.allowDots : !!t.allowDots,
                                        charset: r,
                                        charsetSentinel: "boolean" == typeof t.charsetSentinel ? t
                                            .charsetSentinel : S.charsetSentinel,
                                        delimiter: void 0 === t.delimiter ? S.delimiter : t.delimiter,
                                        encode: "boolean" == typeof t.encode ? t.encode : S.encode,
                                        encoder: "function" == typeof t.encoder ? t.encoder : S.encoder,
                                        encodeValuesOnly: "boolean" == typeof t.encodeValuesOnly ? t
                                            .encodeValuesOnly : S.encodeValuesOnly,
                                        filter: o,
                                        format: n,
                                        formatter: e,
                                        serializeDate: "function" == typeof t.serializeDate ? t
                                            .serializeDate : S.serializeDate,
                                        skipNulls: "boolean" == typeof t.skipNulls ? t.skipNulls : S
                                            .skipNulls,
                                        sort: "function" == typeof t.sort ? t.sort : null,
                                        strictNullHandling: "boolean" == typeof t.strictNullHandling ? t
                                            .strictNullHandling : S.strictNullHandling
                                    }
                                }(r);
                            "function" == typeof o.filter ? e = (0, o.filter)("", e) : g(o.filter) && (n = o
                                .filter);
                            var i = [];
                            if ("object" != typeof e || null === e) return "";
                            var u = m[r && r.arrayFormat in m ? r.arrayFormat : r && "indices" in r ? r
                                .indices ? "indices" : "repeat" : "indices"];
                            n || (n = Object.keys(e)), o.sort && n.sort(o.sort);
                            for (var f = 0; f < n.length; ++f) {
                                var a = n[f];
                                o.skipNulls && null === e[a] || O(i, T(e[a], a, u, o.strictNullHandling, o
                                    .skipNulls, o.encode ? o.encoder : null, o.filter, o.sort, o
                                    .allowDots, o.serializeDate, o.format, o.formatter, o
                                    .encodeValuesOnly, o.charset))
                            }
                            var c = i.join(o.delimiter),
                                l = !0 === o.addQueryPrefix ? "?" : "";
                            return o.charsetSentinel && (l += "iso-8859-1" === o.charset ?
                                "utf8=%26%2310003%3B&" : "utf8=%E2%9C%93&"), c.length > 0 ? l + c : ""
                        }(n({}, r, this.u._query), {
                            addQueryPrefix: !0,
                            arrayFormat: "indices",
                            encodeValuesOnly: !0,
                            skipNulls: !0,
                            encoder: function(t, r) {
                                return "boolean" == typeof t ? Number(t) : r(t)
                            }
                        })
                    }, f.v = function(t) {
                        var r = this;
                        t ? this.t.absolute && t.startsWith("/") && (t = this.p().host + t) : t = this.h();
                        var e = {},
                            o = Object.entries(this.t.routes).find(function(n) {
                                return e = new A(n[0], n[1], r.t).matchesUrl(t)
                            }) || [void 0, void 0];
                        return n({
                            name: o[0]
                        }, e, {
                            route: o[1]
                        })
                    }, f.h = function() {
                        var t = this.p(),
                            r = t.pathname,
                            n = t.search;
                        return (this.t.absolute ? t.host + r : r.replace(this.t.url.replace(/^\w*:\/\/[^/]+/, ""),
                            "").replace(/^\/+/, "/")) + n
                    }, f.current = function(t, r) {
                        var e = this.v(),
                            o = e.name,
                            i = e.params,
                            u = e.query,
                            f = e.route;
                        if (!t) return o;
                        var a = new RegExp("^" + t.replace(/\./g, "\\.").replace(/\*/g, ".*") + "$").test(o);
                        if ([null, void 0].includes(r) || !a) return a;
                        var c = new A(o, f, this.t);
                        r = this.l(r, c);
                        var l = n({}, i, u);
                        return !(!Object.values(r).every(function(t) {
                            return !t
                        }) || Object.values(l).some(function(t) {
                            return void 0 !== t
                        })) || Object.entries(r).every(function(t) {
                            return l[t[0]] == t[1]
                        })
                    }, f.p = function() {
                        var t, r, n, e, o, i, u = "undefined" != typeof window ? window.location : {},
                            f = u.host,
                            a = u.pathname,
                            c = u.search;
                        return {
                            host: null != (t = null == (r = this.t.location) ? void 0 : r.host) ? t : void 0 === f ?
                                "" : f,
                            pathname: null != (n = null == (e = this.t.location) ? void 0 : e.pathname) ? n :
                                void 0 === a ? "" : a,
                            search: null != (o = null == (i = this.t.location) ? void 0 : i.search) ? o : void 0 ===
                                c ? "" : c
                        }
                    }, f.has = function(t) {
                        return Object.keys(this.t.routes).includes(t)
                    }, f.l = function(t, r) {
                        var e = this;
                        void 0 === t && (t = {}), void 0 === r && (r = this.i), t = ["string", "number"].includes(
                            typeof t) ? [t] : t;
                        var o = r.parameterSegments.filter(function(t) {
                            return !e.t.defaults[t.name]
                        });
                        if (Array.isArray(t)) t = t.reduce(function(t, r, e) {
                            var i, u;
                            return n({}, t, o[e] ? ((i = {})[o[e].name] = r, i) : "object" == typeof r ? r :
                                ((u = {})[r] = "", u))
                        }, {});
                        else if (1 === o.length && !t[o[0].name] && (t.hasOwnProperty(Object.values(r.bindings)[
                                0]) || t.hasOwnProperty("id"))) {
                            var i;
                            (i = {})[o[0].name] = t, t = i
                        }
                        return n({}, this.m(r), this.g(t, r))
                    }, f.m = function(t) {
                        var r = this;
                        return t.parameterSegments.filter(function(t) {
                            return r.t.defaults[t.name]
                        }).reduce(function(t, e, o) {
                            var i, u = e.name;
                            return n({}, t, ((i = {})[u] = r.t.defaults[u], i))
                        }, {})
                    }, f.g = function(t, r) {
                        var e = r.bindings,
                            o = r.parameterSegments;
                        return Object.entries(t).reduce(function(t, r) {
                            var i, u, f = r[0],
                                a = r[1];
                            if (!a || "object" != typeof a || Array.isArray(a) || !o.some(function(t) {
                                    return t.name === f
                                })) return n({}, t, ((u = {})[f] = a, u));
                            if (!a.hasOwnProperty(e[f])) {
                                if (!a.hasOwnProperty("id")) throw new Error(
                                    "Ziggy error: object passed as '" + f +
                                    "' parameter is missing route model binding key '" + e[f] + "'."
                                    );
                                e[f] = "id"
                            }
                            return n({}, t, ((i = {})[f] = a[e[f]], i))
                        }, {})
                    }, f.valueOf = function() {
                        return this.toString()
                    }, f.check = function(t) {
                        return this.has(t)
                    }, r(u, [{
                        key: "params",
                        get: function() {
                            var t = this.v();
                            return n({}, t.params, t.query)
                        }
                    }]), u
                }( /*#__PURE__*/ f(String));
            return function(t, r, n, e) {
                var o = new P(t, r, n, e);
                return t ? o.toString() : o
            }
        });
    </script> <!-- Template CSS -->
</head>

<body>


    {{-- MAIN NAVIGATION BAR --}}
    @include('backend.partials.navbar')

    {{-- SIDEBAR LEFT --}}
    {{-- <section>
            @include('backend.partials.sidebar')
        </section> --}}

    {{-- MAIN CONTENT SECTION --}}
    <section class="content">
        <div class="container-fluid">
            @yield('content')
        </div>
    </section>


    <!-- Scripts -->
    <script src="https://infyportfolio.infyom.com/vendor/js-cookie/js.cookie.js"></script>
    <script src="https://infyportfolio.infyom.com/assets/js/moment.min.js"></script>
    <script src="https://infyportfolio.infyom.com/assets/js/popper.min.js"></script>
    <script src="https://infyportfolio.infyom.com/assets/js/jquery.min.js"></script>
    <script src="{{ asset('backend-assets/js/sidebar/sidebar_menu_search.js') }}"></script>
    <script src="https://infyportfolio.infyom.com/assets/js/bootstrap.min.js"></script>
    <script src="https://infyportfolio.infyom.com/assets/js/iziToast.min.js"></script>
    <script src="https://infyportfolio.infyom.com/assets/js/sweetalert2.all.min.js"></script>
    <script src="https://infyportfolio.infyom.com/assets/js/select2.min.js"></script>
    <script src="https://infyportfolio.infyom.com/assets/js/jquery.nicescroll.js"></script>
    <script src="https://infyportfolio.infyom.com/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
    <script src="https://infyportfolio.infyom.com/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
    <script src="https://infyportfolio.infyom.com/assets/js/bootstrap-datepicker.js"></script>
    <script src="https://infyportfolio.infyom.com/messages.js"></script>
    <script src="https://infyportfolio.infyom.com/js/argon.js"></script>
    <script>
        let pdfDocumentImageUrl = "https://infyportfolio.infyom.com/assets/img/pdf_icon.png";
        let docxDocumentImageUrl = "https://infyportfolio.infyom.com/assets/img/doc_icon.png";
        let xlsxDocumentImageUrl = "https://infyportfolio.infyom.com/assets/img/xlsx_icon.png";
        let defaultImage = "https://infyportfolio.infyom.com/img/infyom-logo.png";
        let getCurrentLanguageName = "en"
        Lang.setLocale(getCurrentLanguageName)
    </script>
    <script src="{{ asset('backend-assets/js/phone-number-code/phone-number-code.js') }}"></script>
    <script src="https://infyportfolio.infyom.com/assets/js/summernote.min.js"></script>
    <script src="{{ asset('backend-assets/js/users/users.js') }}"></script>
    <script src="{{ asset('backend-assets/js/country-state-city/country-state-city.js') }}"></script>
    <script src="{{ asset('backend-assets/js/app/app.js') }}"></script>
    <script src="{{ asset('backend-assets/js/custom/custom.js') }}"></script>
    <script src="{{ asset('backend-assets/js/user-profile/user-profile.js') }}"></script>


</body>

</html>
